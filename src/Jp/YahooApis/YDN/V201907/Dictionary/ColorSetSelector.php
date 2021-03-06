<?php

namespace Jp\YahooApis\YDN\V201907\Dictionary;

class ColorSetSelector
{

    /**
     * @var DictionaryLang $lang
     */
    protected $lang = null;

    /**
     * @param DictionaryLang $lang
     */
    public function __construct($lang)
    {
      $this->lang = $lang;
    }

    /**
     * @return DictionaryLang
     */
    public function getLang()
    {
      return $this->lang;
    }

    /**
     * @param DictionaryLang $lang
     * @return \Jp\YahooApis\YDN\V201907\Dictionary\ColorSetSelector
     */
    public function setLang($lang)
    {
      $this->lang = $lang;
      return $this;
    }

}
