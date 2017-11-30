<?php

class Localization
{

    protected $lang;
    protected $installerLang;
    protected $translations;
    protected $translationCache;
    protected $langPath = 'lang/';

    protected static $instance;
    
    public function __construct($lang, $installerLang = false)
    {
        $this->lang = $lang;
        $this->langPath = $this->langPath . $lang;
        $this->installerLang = $installerLang;
        $this->loadTranslations();

        self::$instance = $this;
    }

    public static function getInstance()
    {
        return self::$instance;
    }

    public function get($module)
    {
        if (!empty($module) && !isset($this->translations[$module]) && file_exists($this->langPath . '/modules/' . $module . '.json')) {
            $this->translations[$module] = file_get_contents($this->langPath . '/modules/' . $module . '.json');
        }

        return $this;
    }

    private function loadTranslations()
    {
        $langArray = [];
        
        $langArray['global'] = file_get_contents($this->langPath . '/global.json');

        if ($this->installerLang) {
            $langArray['install'] = file_get_contents($this->langPath .'/install.json');
        }

        $this->translations = $langArray;
    }
    
    public function translate($str, $args = array())
    {
        $tmp = explode('.', $str);
        $translation = '';
        
        if (count($tmp) !== 2 || $tmp[0] !== 'global' && (!empty($this->module) && $tmp[0] !== $this->module)) {
            return false;
        }
        
        if (!isset($this->translations[$tmp[0]])) {
            return '_' . $tmp[1] . '_';
        }
        
        if (!isset($this->translationCache[$tmp[0]])) {
            $this->translationCache[$tmp[0]] = json_decode($this->translations[$tmp[0]], true);
        }
        
        $cachedArray = $this->translationCache[$tmp[0]];
        
        if (!$cachedArray || !isset($cachedArray[$tmp[1]])) {
            return '_' . $tmp[1] . '_';
        }
        
        $translationValue = $cachedArray[$tmp[1]];
        
        if (!empty($args)) {
            $translation = vsprintf($translationValue, $args);
        }
        
        return $translation ?: $translationValue;
    }
}