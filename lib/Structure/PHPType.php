<?php
namespace Goetas\Xsd\XsdToPhp\Structure;

abstract class PHPType
{

    protected $name;

    protected $abstract = false;

    protected $namespace;

    protected $doc;

    public function __construct($name = null, $namespace = null)
    {
        $this->name = $name;
        $this->namespace = $namespace;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    public function getNamespace()
    {
        return $this->namespace;
    }

    public function setNamespace($namespace)
    {
        $this->namespace = $namespace;
        return $this;
    }

    public function getDoc()
    {
        return $this->doc;
    }

    public function setDoc($doc)
    {
        $this->doc = $doc;
        return $this;
    }

    public function __toString()
    {
        return $this->getFullName();
    }

    public function getFullName()
    {
        return "{$this->namespace}\\{$this->name}";
    }

    public function getAbstract()
    {
        return $this->abstract;
    }

    public function setAbstract($abstract)
    {
        $this->abstract = $abstract;
        return $this;
    }

}