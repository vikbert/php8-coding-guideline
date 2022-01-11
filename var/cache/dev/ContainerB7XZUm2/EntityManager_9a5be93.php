<?php

namespace ContainerB7XZUm2;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder60f0a = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer48d8f = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesdc624 = [
        
    ];

    public function getConnection()
    {
        $this->initializer48d8f && ($this->initializer48d8f->__invoke($valueHolder60f0a, $this, 'getConnection', array(), $this->initializer48d8f) || 1) && $this->valueHolder60f0a = $valueHolder60f0a;

        return $this->valueHolder60f0a->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer48d8f && ($this->initializer48d8f->__invoke($valueHolder60f0a, $this, 'getMetadataFactory', array(), $this->initializer48d8f) || 1) && $this->valueHolder60f0a = $valueHolder60f0a;

        return $this->valueHolder60f0a->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer48d8f && ($this->initializer48d8f->__invoke($valueHolder60f0a, $this, 'getExpressionBuilder', array(), $this->initializer48d8f) || 1) && $this->valueHolder60f0a = $valueHolder60f0a;

        return $this->valueHolder60f0a->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer48d8f && ($this->initializer48d8f->__invoke($valueHolder60f0a, $this, 'beginTransaction', array(), $this->initializer48d8f) || 1) && $this->valueHolder60f0a = $valueHolder60f0a;

        return $this->valueHolder60f0a->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer48d8f && ($this->initializer48d8f->__invoke($valueHolder60f0a, $this, 'getCache', array(), $this->initializer48d8f) || 1) && $this->valueHolder60f0a = $valueHolder60f0a;

        return $this->valueHolder60f0a->getCache();
    }

    public function transactional($func)
    {
        $this->initializer48d8f && ($this->initializer48d8f->__invoke($valueHolder60f0a, $this, 'transactional', array('func' => $func), $this->initializer48d8f) || 1) && $this->valueHolder60f0a = $valueHolder60f0a;

        return $this->valueHolder60f0a->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer48d8f && ($this->initializer48d8f->__invoke($valueHolder60f0a, $this, 'wrapInTransaction', array('func' => $func), $this->initializer48d8f) || 1) && $this->valueHolder60f0a = $valueHolder60f0a;

        return $this->valueHolder60f0a->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer48d8f && ($this->initializer48d8f->__invoke($valueHolder60f0a, $this, 'commit', array(), $this->initializer48d8f) || 1) && $this->valueHolder60f0a = $valueHolder60f0a;

        return $this->valueHolder60f0a->commit();
    }

    public function rollback()
    {
        $this->initializer48d8f && ($this->initializer48d8f->__invoke($valueHolder60f0a, $this, 'rollback', array(), $this->initializer48d8f) || 1) && $this->valueHolder60f0a = $valueHolder60f0a;

        return $this->valueHolder60f0a->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer48d8f && ($this->initializer48d8f->__invoke($valueHolder60f0a, $this, 'getClassMetadata', array('className' => $className), $this->initializer48d8f) || 1) && $this->valueHolder60f0a = $valueHolder60f0a;

        return $this->valueHolder60f0a->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer48d8f && ($this->initializer48d8f->__invoke($valueHolder60f0a, $this, 'createQuery', array('dql' => $dql), $this->initializer48d8f) || 1) && $this->valueHolder60f0a = $valueHolder60f0a;

        return $this->valueHolder60f0a->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer48d8f && ($this->initializer48d8f->__invoke($valueHolder60f0a, $this, 'createNamedQuery', array('name' => $name), $this->initializer48d8f) || 1) && $this->valueHolder60f0a = $valueHolder60f0a;

        return $this->valueHolder60f0a->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer48d8f && ($this->initializer48d8f->__invoke($valueHolder60f0a, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer48d8f) || 1) && $this->valueHolder60f0a = $valueHolder60f0a;

        return $this->valueHolder60f0a->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer48d8f && ($this->initializer48d8f->__invoke($valueHolder60f0a, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer48d8f) || 1) && $this->valueHolder60f0a = $valueHolder60f0a;

        return $this->valueHolder60f0a->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer48d8f && ($this->initializer48d8f->__invoke($valueHolder60f0a, $this, 'createQueryBuilder', array(), $this->initializer48d8f) || 1) && $this->valueHolder60f0a = $valueHolder60f0a;

        return $this->valueHolder60f0a->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer48d8f && ($this->initializer48d8f->__invoke($valueHolder60f0a, $this, 'flush', array('entity' => $entity), $this->initializer48d8f) || 1) && $this->valueHolder60f0a = $valueHolder60f0a;

        return $this->valueHolder60f0a->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer48d8f && ($this->initializer48d8f->__invoke($valueHolder60f0a, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer48d8f) || 1) && $this->valueHolder60f0a = $valueHolder60f0a;

        return $this->valueHolder60f0a->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer48d8f && ($this->initializer48d8f->__invoke($valueHolder60f0a, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer48d8f) || 1) && $this->valueHolder60f0a = $valueHolder60f0a;

        return $this->valueHolder60f0a->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer48d8f && ($this->initializer48d8f->__invoke($valueHolder60f0a, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer48d8f) || 1) && $this->valueHolder60f0a = $valueHolder60f0a;

        return $this->valueHolder60f0a->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer48d8f && ($this->initializer48d8f->__invoke($valueHolder60f0a, $this, 'clear', array('entityName' => $entityName), $this->initializer48d8f) || 1) && $this->valueHolder60f0a = $valueHolder60f0a;

        return $this->valueHolder60f0a->clear($entityName);
    }

    public function close()
    {
        $this->initializer48d8f && ($this->initializer48d8f->__invoke($valueHolder60f0a, $this, 'close', array(), $this->initializer48d8f) || 1) && $this->valueHolder60f0a = $valueHolder60f0a;

        return $this->valueHolder60f0a->close();
    }

    public function persist($entity)
    {
        $this->initializer48d8f && ($this->initializer48d8f->__invoke($valueHolder60f0a, $this, 'persist', array('entity' => $entity), $this->initializer48d8f) || 1) && $this->valueHolder60f0a = $valueHolder60f0a;

        return $this->valueHolder60f0a->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer48d8f && ($this->initializer48d8f->__invoke($valueHolder60f0a, $this, 'remove', array('entity' => $entity), $this->initializer48d8f) || 1) && $this->valueHolder60f0a = $valueHolder60f0a;

        return $this->valueHolder60f0a->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer48d8f && ($this->initializer48d8f->__invoke($valueHolder60f0a, $this, 'refresh', array('entity' => $entity), $this->initializer48d8f) || 1) && $this->valueHolder60f0a = $valueHolder60f0a;

        return $this->valueHolder60f0a->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer48d8f && ($this->initializer48d8f->__invoke($valueHolder60f0a, $this, 'detach', array('entity' => $entity), $this->initializer48d8f) || 1) && $this->valueHolder60f0a = $valueHolder60f0a;

        return $this->valueHolder60f0a->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer48d8f && ($this->initializer48d8f->__invoke($valueHolder60f0a, $this, 'merge', array('entity' => $entity), $this->initializer48d8f) || 1) && $this->valueHolder60f0a = $valueHolder60f0a;

        return $this->valueHolder60f0a->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer48d8f && ($this->initializer48d8f->__invoke($valueHolder60f0a, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer48d8f) || 1) && $this->valueHolder60f0a = $valueHolder60f0a;

        return $this->valueHolder60f0a->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer48d8f && ($this->initializer48d8f->__invoke($valueHolder60f0a, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer48d8f) || 1) && $this->valueHolder60f0a = $valueHolder60f0a;

        return $this->valueHolder60f0a->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer48d8f && ($this->initializer48d8f->__invoke($valueHolder60f0a, $this, 'getRepository', array('entityName' => $entityName), $this->initializer48d8f) || 1) && $this->valueHolder60f0a = $valueHolder60f0a;

        return $this->valueHolder60f0a->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer48d8f && ($this->initializer48d8f->__invoke($valueHolder60f0a, $this, 'contains', array('entity' => $entity), $this->initializer48d8f) || 1) && $this->valueHolder60f0a = $valueHolder60f0a;

        return $this->valueHolder60f0a->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer48d8f && ($this->initializer48d8f->__invoke($valueHolder60f0a, $this, 'getEventManager', array(), $this->initializer48d8f) || 1) && $this->valueHolder60f0a = $valueHolder60f0a;

        return $this->valueHolder60f0a->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer48d8f && ($this->initializer48d8f->__invoke($valueHolder60f0a, $this, 'getConfiguration', array(), $this->initializer48d8f) || 1) && $this->valueHolder60f0a = $valueHolder60f0a;

        return $this->valueHolder60f0a->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer48d8f && ($this->initializer48d8f->__invoke($valueHolder60f0a, $this, 'isOpen', array(), $this->initializer48d8f) || 1) && $this->valueHolder60f0a = $valueHolder60f0a;

        return $this->valueHolder60f0a->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer48d8f && ($this->initializer48d8f->__invoke($valueHolder60f0a, $this, 'getUnitOfWork', array(), $this->initializer48d8f) || 1) && $this->valueHolder60f0a = $valueHolder60f0a;

        return $this->valueHolder60f0a->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer48d8f && ($this->initializer48d8f->__invoke($valueHolder60f0a, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer48d8f) || 1) && $this->valueHolder60f0a = $valueHolder60f0a;

        return $this->valueHolder60f0a->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer48d8f && ($this->initializer48d8f->__invoke($valueHolder60f0a, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer48d8f) || 1) && $this->valueHolder60f0a = $valueHolder60f0a;

        return $this->valueHolder60f0a->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer48d8f && ($this->initializer48d8f->__invoke($valueHolder60f0a, $this, 'getProxyFactory', array(), $this->initializer48d8f) || 1) && $this->valueHolder60f0a = $valueHolder60f0a;

        return $this->valueHolder60f0a->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer48d8f && ($this->initializer48d8f->__invoke($valueHolder60f0a, $this, 'initializeObject', array('obj' => $obj), $this->initializer48d8f) || 1) && $this->valueHolder60f0a = $valueHolder60f0a;

        return $this->valueHolder60f0a->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer48d8f && ($this->initializer48d8f->__invoke($valueHolder60f0a, $this, 'getFilters', array(), $this->initializer48d8f) || 1) && $this->valueHolder60f0a = $valueHolder60f0a;

        return $this->valueHolder60f0a->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer48d8f && ($this->initializer48d8f->__invoke($valueHolder60f0a, $this, 'isFiltersStateClean', array(), $this->initializer48d8f) || 1) && $this->valueHolder60f0a = $valueHolder60f0a;

        return $this->valueHolder60f0a->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer48d8f && ($this->initializer48d8f->__invoke($valueHolder60f0a, $this, 'hasFilters', array(), $this->initializer48d8f) || 1) && $this->valueHolder60f0a = $valueHolder60f0a;

        return $this->valueHolder60f0a->hasFilters();
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

        $instance->initializer48d8f = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder60f0a) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder60f0a = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder60f0a->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer48d8f && ($this->initializer48d8f->__invoke($valueHolder60f0a, $this, '__get', ['name' => $name], $this->initializer48d8f) || 1) && $this->valueHolder60f0a = $valueHolder60f0a;

        if (isset(self::$publicPropertiesdc624[$name])) {
            return $this->valueHolder60f0a->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder60f0a;

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

        $targetObject = $this->valueHolder60f0a;
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
        $this->initializer48d8f && ($this->initializer48d8f->__invoke($valueHolder60f0a, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer48d8f) || 1) && $this->valueHolder60f0a = $valueHolder60f0a;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder60f0a;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder60f0a;
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
        $this->initializer48d8f && ($this->initializer48d8f->__invoke($valueHolder60f0a, $this, '__isset', array('name' => $name), $this->initializer48d8f) || 1) && $this->valueHolder60f0a = $valueHolder60f0a;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder60f0a;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder60f0a;
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
        $this->initializer48d8f && ($this->initializer48d8f->__invoke($valueHolder60f0a, $this, '__unset', array('name' => $name), $this->initializer48d8f) || 1) && $this->valueHolder60f0a = $valueHolder60f0a;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder60f0a;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder60f0a;
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
        $this->initializer48d8f && ($this->initializer48d8f->__invoke($valueHolder60f0a, $this, '__clone', array(), $this->initializer48d8f) || 1) && $this->valueHolder60f0a = $valueHolder60f0a;

        $this->valueHolder60f0a = clone $this->valueHolder60f0a;
    }

    public function __sleep()
    {
        $this->initializer48d8f && ($this->initializer48d8f->__invoke($valueHolder60f0a, $this, '__sleep', array(), $this->initializer48d8f) || 1) && $this->valueHolder60f0a = $valueHolder60f0a;

        return array('valueHolder60f0a');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer48d8f = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer48d8f;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer48d8f && ($this->initializer48d8f->__invoke($valueHolder60f0a, $this, 'initializeProxy', array(), $this->initializer48d8f) || 1) && $this->valueHolder60f0a = $valueHolder60f0a;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder60f0a;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder60f0a;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
