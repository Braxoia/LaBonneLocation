<?php

namespace ContainerJoxHilX;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolderf440b = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializerd9080 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties4b2c4 = [
        
    ];

    public function getConnection()
    {
        $this->initializerd9080 && ($this->initializerd9080->__invoke($valueHolderf440b, $this, 'getConnection', array(), $this->initializerd9080) || 1) && $this->valueHolderf440b = $valueHolderf440b;

        return $this->valueHolderf440b->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializerd9080 && ($this->initializerd9080->__invoke($valueHolderf440b, $this, 'getMetadataFactory', array(), $this->initializerd9080) || 1) && $this->valueHolderf440b = $valueHolderf440b;

        return $this->valueHolderf440b->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializerd9080 && ($this->initializerd9080->__invoke($valueHolderf440b, $this, 'getExpressionBuilder', array(), $this->initializerd9080) || 1) && $this->valueHolderf440b = $valueHolderf440b;

        return $this->valueHolderf440b->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializerd9080 && ($this->initializerd9080->__invoke($valueHolderf440b, $this, 'beginTransaction', array(), $this->initializerd9080) || 1) && $this->valueHolderf440b = $valueHolderf440b;

        return $this->valueHolderf440b->beginTransaction();
    }

    public function getCache()
    {
        $this->initializerd9080 && ($this->initializerd9080->__invoke($valueHolderf440b, $this, 'getCache', array(), $this->initializerd9080) || 1) && $this->valueHolderf440b = $valueHolderf440b;

        return $this->valueHolderf440b->getCache();
    }

    public function transactional($func)
    {
        $this->initializerd9080 && ($this->initializerd9080->__invoke($valueHolderf440b, $this, 'transactional', array('func' => $func), $this->initializerd9080) || 1) && $this->valueHolderf440b = $valueHolderf440b;

        return $this->valueHolderf440b->transactional($func);
    }

    public function commit()
    {
        $this->initializerd9080 && ($this->initializerd9080->__invoke($valueHolderf440b, $this, 'commit', array(), $this->initializerd9080) || 1) && $this->valueHolderf440b = $valueHolderf440b;

        return $this->valueHolderf440b->commit();
    }

    public function rollback()
    {
        $this->initializerd9080 && ($this->initializerd9080->__invoke($valueHolderf440b, $this, 'rollback', array(), $this->initializerd9080) || 1) && $this->valueHolderf440b = $valueHolderf440b;

        return $this->valueHolderf440b->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializerd9080 && ($this->initializerd9080->__invoke($valueHolderf440b, $this, 'getClassMetadata', array('className' => $className), $this->initializerd9080) || 1) && $this->valueHolderf440b = $valueHolderf440b;

        return $this->valueHolderf440b->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializerd9080 && ($this->initializerd9080->__invoke($valueHolderf440b, $this, 'createQuery', array('dql' => $dql), $this->initializerd9080) || 1) && $this->valueHolderf440b = $valueHolderf440b;

        return $this->valueHolderf440b->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializerd9080 && ($this->initializerd9080->__invoke($valueHolderf440b, $this, 'createNamedQuery', array('name' => $name), $this->initializerd9080) || 1) && $this->valueHolderf440b = $valueHolderf440b;

        return $this->valueHolderf440b->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializerd9080 && ($this->initializerd9080->__invoke($valueHolderf440b, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializerd9080) || 1) && $this->valueHolderf440b = $valueHolderf440b;

        return $this->valueHolderf440b->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializerd9080 && ($this->initializerd9080->__invoke($valueHolderf440b, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializerd9080) || 1) && $this->valueHolderf440b = $valueHolderf440b;

        return $this->valueHolderf440b->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializerd9080 && ($this->initializerd9080->__invoke($valueHolderf440b, $this, 'createQueryBuilder', array(), $this->initializerd9080) || 1) && $this->valueHolderf440b = $valueHolderf440b;

        return $this->valueHolderf440b->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializerd9080 && ($this->initializerd9080->__invoke($valueHolderf440b, $this, 'flush', array('entity' => $entity), $this->initializerd9080) || 1) && $this->valueHolderf440b = $valueHolderf440b;

        return $this->valueHolderf440b->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializerd9080 && ($this->initializerd9080->__invoke($valueHolderf440b, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerd9080) || 1) && $this->valueHolderf440b = $valueHolderf440b;

        return $this->valueHolderf440b->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializerd9080 && ($this->initializerd9080->__invoke($valueHolderf440b, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializerd9080) || 1) && $this->valueHolderf440b = $valueHolderf440b;

        return $this->valueHolderf440b->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializerd9080 && ($this->initializerd9080->__invoke($valueHolderf440b, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializerd9080) || 1) && $this->valueHolderf440b = $valueHolderf440b;

        return $this->valueHolderf440b->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializerd9080 && ($this->initializerd9080->__invoke($valueHolderf440b, $this, 'clear', array('entityName' => $entityName), $this->initializerd9080) || 1) && $this->valueHolderf440b = $valueHolderf440b;

        return $this->valueHolderf440b->clear($entityName);
    }

    public function close()
    {
        $this->initializerd9080 && ($this->initializerd9080->__invoke($valueHolderf440b, $this, 'close', array(), $this->initializerd9080) || 1) && $this->valueHolderf440b = $valueHolderf440b;

        return $this->valueHolderf440b->close();
    }

    public function persist($entity)
    {
        $this->initializerd9080 && ($this->initializerd9080->__invoke($valueHolderf440b, $this, 'persist', array('entity' => $entity), $this->initializerd9080) || 1) && $this->valueHolderf440b = $valueHolderf440b;

        return $this->valueHolderf440b->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializerd9080 && ($this->initializerd9080->__invoke($valueHolderf440b, $this, 'remove', array('entity' => $entity), $this->initializerd9080) || 1) && $this->valueHolderf440b = $valueHolderf440b;

        return $this->valueHolderf440b->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializerd9080 && ($this->initializerd9080->__invoke($valueHolderf440b, $this, 'refresh', array('entity' => $entity), $this->initializerd9080) || 1) && $this->valueHolderf440b = $valueHolderf440b;

        return $this->valueHolderf440b->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializerd9080 && ($this->initializerd9080->__invoke($valueHolderf440b, $this, 'detach', array('entity' => $entity), $this->initializerd9080) || 1) && $this->valueHolderf440b = $valueHolderf440b;

        return $this->valueHolderf440b->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializerd9080 && ($this->initializerd9080->__invoke($valueHolderf440b, $this, 'merge', array('entity' => $entity), $this->initializerd9080) || 1) && $this->valueHolderf440b = $valueHolderf440b;

        return $this->valueHolderf440b->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializerd9080 && ($this->initializerd9080->__invoke($valueHolderf440b, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializerd9080) || 1) && $this->valueHolderf440b = $valueHolderf440b;

        return $this->valueHolderf440b->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializerd9080 && ($this->initializerd9080->__invoke($valueHolderf440b, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerd9080) || 1) && $this->valueHolderf440b = $valueHolderf440b;

        return $this->valueHolderf440b->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializerd9080 && ($this->initializerd9080->__invoke($valueHolderf440b, $this, 'getRepository', array('entityName' => $entityName), $this->initializerd9080) || 1) && $this->valueHolderf440b = $valueHolderf440b;

        return $this->valueHolderf440b->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializerd9080 && ($this->initializerd9080->__invoke($valueHolderf440b, $this, 'contains', array('entity' => $entity), $this->initializerd9080) || 1) && $this->valueHolderf440b = $valueHolderf440b;

        return $this->valueHolderf440b->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializerd9080 && ($this->initializerd9080->__invoke($valueHolderf440b, $this, 'getEventManager', array(), $this->initializerd9080) || 1) && $this->valueHolderf440b = $valueHolderf440b;

        return $this->valueHolderf440b->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializerd9080 && ($this->initializerd9080->__invoke($valueHolderf440b, $this, 'getConfiguration', array(), $this->initializerd9080) || 1) && $this->valueHolderf440b = $valueHolderf440b;

        return $this->valueHolderf440b->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializerd9080 && ($this->initializerd9080->__invoke($valueHolderf440b, $this, 'isOpen', array(), $this->initializerd9080) || 1) && $this->valueHolderf440b = $valueHolderf440b;

        return $this->valueHolderf440b->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializerd9080 && ($this->initializerd9080->__invoke($valueHolderf440b, $this, 'getUnitOfWork', array(), $this->initializerd9080) || 1) && $this->valueHolderf440b = $valueHolderf440b;

        return $this->valueHolderf440b->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializerd9080 && ($this->initializerd9080->__invoke($valueHolderf440b, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializerd9080) || 1) && $this->valueHolderf440b = $valueHolderf440b;

        return $this->valueHolderf440b->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializerd9080 && ($this->initializerd9080->__invoke($valueHolderf440b, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializerd9080) || 1) && $this->valueHolderf440b = $valueHolderf440b;

        return $this->valueHolderf440b->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializerd9080 && ($this->initializerd9080->__invoke($valueHolderf440b, $this, 'getProxyFactory', array(), $this->initializerd9080) || 1) && $this->valueHolderf440b = $valueHolderf440b;

        return $this->valueHolderf440b->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializerd9080 && ($this->initializerd9080->__invoke($valueHolderf440b, $this, 'initializeObject', array('obj' => $obj), $this->initializerd9080) || 1) && $this->valueHolderf440b = $valueHolderf440b;

        return $this->valueHolderf440b->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializerd9080 && ($this->initializerd9080->__invoke($valueHolderf440b, $this, 'getFilters', array(), $this->initializerd9080) || 1) && $this->valueHolderf440b = $valueHolderf440b;

        return $this->valueHolderf440b->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializerd9080 && ($this->initializerd9080->__invoke($valueHolderf440b, $this, 'isFiltersStateClean', array(), $this->initializerd9080) || 1) && $this->valueHolderf440b = $valueHolderf440b;

        return $this->valueHolderf440b->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializerd9080 && ($this->initializerd9080->__invoke($valueHolderf440b, $this, 'hasFilters', array(), $this->initializerd9080) || 1) && $this->valueHolderf440b = $valueHolderf440b;

        return $this->valueHolderf440b->hasFilters();
    }

    /**
     * Constructor for lazy initialization
     *
     * @param \Closure|null $initializer
     */
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;

        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();

        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $instance, 'Doctrine\\ORM\\EntityManager')->__invoke($instance);

        $instance->initializerd9080 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolderf440b) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolderf440b = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolderf440b->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializerd9080 && ($this->initializerd9080->__invoke($valueHolderf440b, $this, '__get', ['name' => $name], $this->initializerd9080) || 1) && $this->valueHolderf440b = $valueHolderf440b;

        if (isset(self::$publicProperties4b2c4[$name])) {
            return $this->valueHolderf440b->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderf440b;

            $backtrace = debug_backtrace(false, 1);
            trigger_error(
                sprintf(
                    'Undefined property: %s::$%s in %s on line %s',
                    $realInstanceReflection->getName(),
                    $name,
                    $backtrace[0]['file'],
                    $backtrace[0]['line']
                ),
                \E_USER_NOTICE
            );
            return $targetObject->$name;
        }

        $targetObject = $this->valueHolderf440b;
        $accessor = function & () use ($targetObject, $name) {
            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    public function __set($name, $value)
    {
        $this->initializerd9080 && ($this->initializerd9080->__invoke($valueHolderf440b, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerd9080) || 1) && $this->valueHolderf440b = $valueHolderf440b;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderf440b;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolderf440b;
        $accessor = function & () use ($targetObject, $name, $value) {
            $targetObject->$name = $value;

            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    public function __isset($name)
    {
        $this->initializerd9080 && ($this->initializerd9080->__invoke($valueHolderf440b, $this, '__isset', array('name' => $name), $this->initializerd9080) || 1) && $this->valueHolderf440b = $valueHolderf440b;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderf440b;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolderf440b;
        $accessor = function () use ($targetObject, $name) {
            return isset($targetObject->$name);
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = $accessor();

        return $returnValue;
    }

    public function __unset($name)
    {
        $this->initializerd9080 && ($this->initializerd9080->__invoke($valueHolderf440b, $this, '__unset', array('name' => $name), $this->initializerd9080) || 1) && $this->valueHolderf440b = $valueHolderf440b;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderf440b;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolderf440b;
        $accessor = function () use ($targetObject, $name) {
            unset($targetObject->$name);

            return;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $accessor();
    }

    public function __clone()
    {
        $this->initializerd9080 && ($this->initializerd9080->__invoke($valueHolderf440b, $this, '__clone', array(), $this->initializerd9080) || 1) && $this->valueHolderf440b = $valueHolderf440b;

        $this->valueHolderf440b = clone $this->valueHolderf440b;
    }

    public function __sleep()
    {
        $this->initializerd9080 && ($this->initializerd9080->__invoke($valueHolderf440b, $this, '__sleep', array(), $this->initializerd9080) || 1) && $this->valueHolderf440b = $valueHolderf440b;

        return array('valueHolderf440b');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializerd9080 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializerd9080;
    }

    public function initializeProxy() : bool
    {
        return $this->initializerd9080 && ($this->initializerd9080->__invoke($valueHolderf440b, $this, 'initializeProxy', array(), $this->initializerd9080) || 1) && $this->valueHolderf440b = $valueHolderf440b;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderf440b;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderf440b;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
