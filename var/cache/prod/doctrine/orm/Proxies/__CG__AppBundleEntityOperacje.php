<?php

namespace Proxies\__CG__\AppBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Operacje extends \AppBundle\Entity\Operacje implements \Doctrine\ORM\Proxy\Proxy
{
    /**
     * @var \Closure the callback responsible for loading properties in the proxy object. This callback is called with
     *      three parameters, being respectively the proxy object to be initialized, the method that triggered the
     *      initialization process and an array of ordered parameters that were passed to that method.
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setInitializer
     */
    public $__initializer__;

    /**
     * @var \Closure the callback responsible of loading properties that need to be copied in the cloned object
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setCloner
     */
    public $__cloner__;

    /**
     * @var boolean flag indicating if this object was already initialized
     *
     * @see \Doctrine\Common\Persistence\Proxy::__isInitialized
     */
    public $__isInitialized__ = false;

    /**
     * @var array properties to be lazy loaded, with keys being the property
     *            names and values being their default values
     *
     * @see \Doctrine\Common\Persistence\Proxy::__getLazyProperties
     */
    public static $lazyPropertiesDefaults = [];



    /**
     * @param \Closure $initializer
     * @param \Closure $cloner
     */
    public function __construct($initializer = null, $cloner = null)
    {

        $this->__initializer__ = $initializer;
        $this->__cloner__      = $cloner;
    }







    /**
     * 
     * @return array
     */
    public function __sleep()
    {
        if ($this->__isInitialized__) {
            return ['__isInitialized__', '' . "\0" . 'AppBundle\\Entity\\Operacje' . "\0" . 'id', '' . "\0" . 'AppBundle\\Entity\\Operacje' . "\0" . 'type', '' . "\0" . 'AppBundle\\Entity\\Operacje' . "\0" . 'dataOperacji', '' . "\0" . 'AppBundle\\Entity\\Operacje' . "\0" . 'dataKsiegowania', '' . "\0" . 'AppBundle\\Entity\\Operacje' . "\0" . 'opisOperacji', '' . "\0" . 'AppBundle\\Entity\\Operacje' . "\0" . 'tytul', '' . "\0" . 'AppBundle\\Entity\\Operacje' . "\0" . 'kontrahent', '' . "\0" . 'AppBundle\\Entity\\Operacje' . "\0" . 'nrKonta', '' . "\0" . 'AppBundle\\Entity\\Operacje' . "\0" . 'kwota', '' . "\0" . 'AppBundle\\Entity\\Operacje' . "\0" . 'saldoPoOperacji', '' . "\0" . 'AppBundle\\Entity\\Operacje' . "\0" . 'plikWyciaguBankowego'];
        }

        return ['__isInitialized__', '' . "\0" . 'AppBundle\\Entity\\Operacje' . "\0" . 'id', '' . "\0" . 'AppBundle\\Entity\\Operacje' . "\0" . 'type', '' . "\0" . 'AppBundle\\Entity\\Operacje' . "\0" . 'dataOperacji', '' . "\0" . 'AppBundle\\Entity\\Operacje' . "\0" . 'dataKsiegowania', '' . "\0" . 'AppBundle\\Entity\\Operacje' . "\0" . 'opisOperacji', '' . "\0" . 'AppBundle\\Entity\\Operacje' . "\0" . 'tytul', '' . "\0" . 'AppBundle\\Entity\\Operacje' . "\0" . 'kontrahent', '' . "\0" . 'AppBundle\\Entity\\Operacje' . "\0" . 'nrKonta', '' . "\0" . 'AppBundle\\Entity\\Operacje' . "\0" . 'kwota', '' . "\0" . 'AppBundle\\Entity\\Operacje' . "\0" . 'saldoPoOperacji', '' . "\0" . 'AppBundle\\Entity\\Operacje' . "\0" . 'plikWyciaguBankowego'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Operacje $proxy) {
                $proxy->__setInitializer(null);
                $proxy->__setCloner(null);

                $existingProperties = get_object_vars($proxy);

                foreach ($proxy->__getLazyProperties() as $property => $defaultValue) {
                    if ( ! array_key_exists($property, $existingProperties)) {
                        $proxy->$property = $defaultValue;
                    }
                }
            };

        }
    }

    /**
     * 
     */
    public function __clone()
    {
        $this->__cloner__ && $this->__cloner__->__invoke($this, '__clone', []);
    }

    /**
     * Forces initialization of the proxy
     */
    public function __load()
    {
        $this->__initializer__ && $this->__initializer__->__invoke($this, '__load', []);
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __isInitialized()
    {
        return $this->__isInitialized__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitialized($initialized)
    {
        $this->__isInitialized__ = $initialized;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitializer(\Closure $initializer = null)
    {
        $this->__initializer__ = $initializer;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __getInitializer()
    {
        return $this->__initializer__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setCloner(\Closure $cloner = null)
    {
        $this->__cloner__ = $cloner;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific cloning logic
     */
    public function __getCloner()
    {
        return $this->__cloner__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     * @static
     */
    public function __getLazyProperties()
    {
        return self::$lazyPropertiesDefaults;
    }

    
    /**
     * {@inheritDoc}
     */
    public function getId()
    {
        if ($this->__isInitialized__ === false) {
            return (int)  parent::getId();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getId', []);

        return parent::getId();
    }

    /**
     * {@inheritDoc}
     */
    public function getType()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getType', []);

        return parent::getType();
    }

    /**
     * {@inheritDoc}
     */
    public function setType($type)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setType', [$type]);

        return parent::setType($type);
    }

    /**
     * {@inheritDoc}
     */
    public function setDataOperacji($dataOperacji)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDataOperacji', [$dataOperacji]);

        return parent::setDataOperacji($dataOperacji);
    }

    /**
     * {@inheritDoc}
     */
    public function getDataOperacji()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDataOperacji', []);

        return parent::getDataOperacji();
    }

    /**
     * {@inheritDoc}
     */
    public function setDataKsiegowania($dataKsiegowania)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDataKsiegowania', [$dataKsiegowania]);

        return parent::setDataKsiegowania($dataKsiegowania);
    }

    /**
     * {@inheritDoc}
     */
    public function getDataKsiegowania()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDataKsiegowania', []);

        return parent::getDataKsiegowania();
    }

    /**
     * {@inheritDoc}
     */
    public function setOpisOperacji($opisOperacji)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setOpisOperacji', [$opisOperacji]);

        return parent::setOpisOperacji($opisOperacji);
    }

    /**
     * {@inheritDoc}
     */
    public function getOpisOperacji()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getOpisOperacji', []);

        return parent::getOpisOperacji();
    }

    /**
     * {@inheritDoc}
     */
    public function setTytul($tytul)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTytul', [$tytul]);

        return parent::setTytul($tytul);
    }

    /**
     * {@inheritDoc}
     */
    public function getTytul()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTytul', []);

        return parent::getTytul();
    }

    /**
     * {@inheritDoc}
     */
    public function getKontrahent()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getKontrahent', []);

        return parent::getKontrahent();
    }

    /**
     * {@inheritDoc}
     */
    public function setKontrahent($kontrahent)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setKontrahent', [$kontrahent]);

        return parent::setKontrahent($kontrahent);
    }

    /**
     * {@inheritDoc}
     */
    public function setNrKonta($nrKonta)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNrKonta', [$nrKonta]);

        return parent::setNrKonta($nrKonta);
    }

    /**
     * {@inheritDoc}
     */
    public function getNrKonta()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNrKonta', []);

        return parent::getNrKonta();
    }

    /**
     * {@inheritDoc}
     */
    public function setKwota($kwota)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setKwota', [$kwota]);

        return parent::setKwota($kwota);
    }

    /**
     * {@inheritDoc}
     */
    public function getKwota()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getKwota', []);

        return parent::getKwota();
    }

    /**
     * {@inheritDoc}
     */
    public function setSaldoPoOperacji($saldoPoOperacji)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setSaldoPoOperacji', [$saldoPoOperacji]);

        return parent::setSaldoPoOperacji($saldoPoOperacji);
    }

    /**
     * {@inheritDoc}
     */
    public function getSaldoPoOperacji()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSaldoPoOperacji', []);

        return parent::getSaldoPoOperacji();
    }

    /**
     * {@inheritDoc}
     */
    public function getPlikWyciaguBankowego()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPlikWyciaguBankowego', []);

        return parent::getPlikWyciaguBankowego();
    }

    /**
     * {@inheritDoc}
     */
    public function setPlikWyciaguBankowego($plikWyciaguBankowego)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPlikWyciaguBankowego', [$plikWyciaguBankowego]);

        return parent::setPlikWyciaguBankowego($plikWyciaguBankowego);
    }

}