<?php

namespace ContainerBlgxlzE;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder4eeab = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializerb3a7f = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties12444 = [
        
    ];

    public function getConnection()
    {
        $this->initializerb3a7f && ($this->initializerb3a7f->__invoke($valueHolder4eeab, $this, 'getConnection', array(), $this->initializerb3a7f) || 1) && $this->valueHolder4eeab = $valueHolder4eeab;

        return $this->valueHolder4eeab->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializerb3a7f && ($this->initializerb3a7f->__invoke($valueHolder4eeab, $this, 'getMetadataFactory', array(), $this->initializerb3a7f) || 1) && $this->valueHolder4eeab = $valueHolder4eeab;

        return $this->valueHolder4eeab->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializerb3a7f && ($this->initializerb3a7f->__invoke($valueHolder4eeab, $this, 'getExpressionBuilder', array(), $this->initializerb3a7f) || 1) && $this->valueHolder4eeab = $valueHolder4eeab;

        return $this->valueHolder4eeab->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializerb3a7f && ($this->initializerb3a7f->__invoke($valueHolder4eeab, $this, 'beginTransaction', array(), $this->initializerb3a7f) || 1) && $this->valueHolder4eeab = $valueHolder4eeab;

        return $this->valueHolder4eeab->beginTransaction();
    }

    public function getCache()
    {
        $this->initializerb3a7f && ($this->initializerb3a7f->__invoke($valueHolder4eeab, $this, 'getCache', array(), $this->initializerb3a7f) || 1) && $this->valueHolder4eeab = $valueHolder4eeab;

        return $this->valueHolder4eeab->getCache();
    }

    public function transactional($func)
    {
        $this->initializerb3a7f && ($this->initializerb3a7f->__invoke($valueHolder4eeab, $this, 'transactional', array('func' => $func), $this->initializerb3a7f) || 1) && $this->valueHolder4eeab = $valueHolder4eeab;

        return $this->valueHolder4eeab->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializerb3a7f && ($this->initializerb3a7f->__invoke($valueHolder4eeab, $this, 'wrapInTransaction', array('func' => $func), $this->initializerb3a7f) || 1) && $this->valueHolder4eeab = $valueHolder4eeab;

        return $this->valueHolder4eeab->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializerb3a7f && ($this->initializerb3a7f->__invoke($valueHolder4eeab, $this, 'commit', array(), $this->initializerb3a7f) || 1) && $this->valueHolder4eeab = $valueHolder4eeab;

        return $this->valueHolder4eeab->commit();
    }

    public function rollback()
    {
        $this->initializerb3a7f && ($this->initializerb3a7f->__invoke($valueHolder4eeab, $this, 'rollback', array(), $this->initializerb3a7f) || 1) && $this->valueHolder4eeab = $valueHolder4eeab;

        return $this->valueHolder4eeab->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializerb3a7f && ($this->initializerb3a7f->__invoke($valueHolder4eeab, $this, 'getClassMetadata', array('className' => $className), $this->initializerb3a7f) || 1) && $this->valueHolder4eeab = $valueHolder4eeab;

        return $this->valueHolder4eeab->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializerb3a7f && ($this->initializerb3a7f->__invoke($valueHolder4eeab, $this, 'createQuery', array('dql' => $dql), $this->initializerb3a7f) || 1) && $this->valueHolder4eeab = $valueHolder4eeab;

        return $this->valueHolder4eeab->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializerb3a7f && ($this->initializerb3a7f->__invoke($valueHolder4eeab, $this, 'createNamedQuery', array('name' => $name), $this->initializerb3a7f) || 1) && $this->valueHolder4eeab = $valueHolder4eeab;

        return $this->valueHolder4eeab->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializerb3a7f && ($this->initializerb3a7f->__invoke($valueHolder4eeab, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializerb3a7f) || 1) && $this->valueHolder4eeab = $valueHolder4eeab;

        return $this->valueHolder4eeab->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializerb3a7f && ($this->initializerb3a7f->__invoke($valueHolder4eeab, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializerb3a7f) || 1) && $this->valueHolder4eeab = $valueHolder4eeab;

        return $this->valueHolder4eeab->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializerb3a7f && ($this->initializerb3a7f->__invoke($valueHolder4eeab, $this, 'createQueryBuilder', array(), $this->initializerb3a7f) || 1) && $this->valueHolder4eeab = $valueHolder4eeab;

        return $this->valueHolder4eeab->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializerb3a7f && ($this->initializerb3a7f->__invoke($valueHolder4eeab, $this, 'flush', array('entity' => $entity), $this->initializerb3a7f) || 1) && $this->valueHolder4eeab = $valueHolder4eeab;

        return $this->valueHolder4eeab->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializerb3a7f && ($this->initializerb3a7f->__invoke($valueHolder4eeab, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerb3a7f) || 1) && $this->valueHolder4eeab = $valueHolder4eeab;

        return $this->valueHolder4eeab->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializerb3a7f && ($this->initializerb3a7f->__invoke($valueHolder4eeab, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializerb3a7f) || 1) && $this->valueHolder4eeab = $valueHolder4eeab;

        return $this->valueHolder4eeab->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializerb3a7f && ($this->initializerb3a7f->__invoke($valueHolder4eeab, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializerb3a7f) || 1) && $this->valueHolder4eeab = $valueHolder4eeab;

        return $this->valueHolder4eeab->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializerb3a7f && ($this->initializerb3a7f->__invoke($valueHolder4eeab, $this, 'clear', array('entityName' => $entityName), $this->initializerb3a7f) || 1) && $this->valueHolder4eeab = $valueHolder4eeab;

        return $this->valueHolder4eeab->clear($entityName);
    }

    public function close()
    {
        $this->initializerb3a7f && ($this->initializerb3a7f->__invoke($valueHolder4eeab, $this, 'close', array(), $this->initializerb3a7f) || 1) && $this->valueHolder4eeab = $valueHolder4eeab;

        return $this->valueHolder4eeab->close();
    }

    public function persist($entity)
    {
        $this->initializerb3a7f && ($this->initializerb3a7f->__invoke($valueHolder4eeab, $this, 'persist', array('entity' => $entity), $this->initializerb3a7f) || 1) && $this->valueHolder4eeab = $valueHolder4eeab;

        return $this->valueHolder4eeab->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializerb3a7f && ($this->initializerb3a7f->__invoke($valueHolder4eeab, $this, 'remove', array('entity' => $entity), $this->initializerb3a7f) || 1) && $this->valueHolder4eeab = $valueHolder4eeab;

        return $this->valueHolder4eeab->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializerb3a7f && ($this->initializerb3a7f->__invoke($valueHolder4eeab, $this, 'refresh', array('entity' => $entity), $this->initializerb3a7f) || 1) && $this->valueHolder4eeab = $valueHolder4eeab;

        return $this->valueHolder4eeab->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializerb3a7f && ($this->initializerb3a7f->__invoke($valueHolder4eeab, $this, 'detach', array('entity' => $entity), $this->initializerb3a7f) || 1) && $this->valueHolder4eeab = $valueHolder4eeab;

        return $this->valueHolder4eeab->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializerb3a7f && ($this->initializerb3a7f->__invoke($valueHolder4eeab, $this, 'merge', array('entity' => $entity), $this->initializerb3a7f) || 1) && $this->valueHolder4eeab = $valueHolder4eeab;

        return $this->valueHolder4eeab->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializerb3a7f && ($this->initializerb3a7f->__invoke($valueHolder4eeab, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializerb3a7f) || 1) && $this->valueHolder4eeab = $valueHolder4eeab;

        return $this->valueHolder4eeab->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializerb3a7f && ($this->initializerb3a7f->__invoke($valueHolder4eeab, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerb3a7f) || 1) && $this->valueHolder4eeab = $valueHolder4eeab;

        return $this->valueHolder4eeab->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializerb3a7f && ($this->initializerb3a7f->__invoke($valueHolder4eeab, $this, 'getRepository', array('entityName' => $entityName), $this->initializerb3a7f) || 1) && $this->valueHolder4eeab = $valueHolder4eeab;

        return $this->valueHolder4eeab->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializerb3a7f && ($this->initializerb3a7f->__invoke($valueHolder4eeab, $this, 'contains', array('entity' => $entity), $this->initializerb3a7f) || 1) && $this->valueHolder4eeab = $valueHolder4eeab;

        return $this->valueHolder4eeab->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializerb3a7f && ($this->initializerb3a7f->__invoke($valueHolder4eeab, $this, 'getEventManager', array(), $this->initializerb3a7f) || 1) && $this->valueHolder4eeab = $valueHolder4eeab;

        return $this->valueHolder4eeab->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializerb3a7f && ($this->initializerb3a7f->__invoke($valueHolder4eeab, $this, 'getConfiguration', array(), $this->initializerb3a7f) || 1) && $this->valueHolder4eeab = $valueHolder4eeab;

        return $this->valueHolder4eeab->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializerb3a7f && ($this->initializerb3a7f->__invoke($valueHolder4eeab, $this, 'isOpen', array(), $this->initializerb3a7f) || 1) && $this->valueHolder4eeab = $valueHolder4eeab;

        return $this->valueHolder4eeab->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializerb3a7f && ($this->initializerb3a7f->__invoke($valueHolder4eeab, $this, 'getUnitOfWork', array(), $this->initializerb3a7f) || 1) && $this->valueHolder4eeab = $valueHolder4eeab;

        return $this->valueHolder4eeab->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializerb3a7f && ($this->initializerb3a7f->__invoke($valueHolder4eeab, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializerb3a7f) || 1) && $this->valueHolder4eeab = $valueHolder4eeab;

        return $this->valueHolder4eeab->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializerb3a7f && ($this->initializerb3a7f->__invoke($valueHolder4eeab, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializerb3a7f) || 1) && $this->valueHolder4eeab = $valueHolder4eeab;

        return $this->valueHolder4eeab->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializerb3a7f && ($this->initializerb3a7f->__invoke($valueHolder4eeab, $this, 'getProxyFactory', array(), $this->initializerb3a7f) || 1) && $this->valueHolder4eeab = $valueHolder4eeab;

        return $this->valueHolder4eeab->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializerb3a7f && ($this->initializerb3a7f->__invoke($valueHolder4eeab, $this, 'initializeObject', array('obj' => $obj), $this->initializerb3a7f) || 1) && $this->valueHolder4eeab = $valueHolder4eeab;

        return $this->valueHolder4eeab->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializerb3a7f && ($this->initializerb3a7f->__invoke($valueHolder4eeab, $this, 'getFilters', array(), $this->initializerb3a7f) || 1) && $this->valueHolder4eeab = $valueHolder4eeab;

        return $this->valueHolder4eeab->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializerb3a7f && ($this->initializerb3a7f->__invoke($valueHolder4eeab, $this, 'isFiltersStateClean', array(), $this->initializerb3a7f) || 1) && $this->valueHolder4eeab = $valueHolder4eeab;

        return $this->valueHolder4eeab->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializerb3a7f && ($this->initializerb3a7f->__invoke($valueHolder4eeab, $this, 'hasFilters', array(), $this->initializerb3a7f) || 1) && $this->valueHolder4eeab = $valueHolder4eeab;

        return $this->valueHolder4eeab->hasFilters();
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

        $instance->initializerb3a7f = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder4eeab) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder4eeab = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder4eeab->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializerb3a7f && ($this->initializerb3a7f->__invoke($valueHolder4eeab, $this, '__get', ['name' => $name], $this->initializerb3a7f) || 1) && $this->valueHolder4eeab = $valueHolder4eeab;

        if (isset(self::$publicProperties12444[$name])) {
            return $this->valueHolder4eeab->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder4eeab;

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

        $targetObject = $this->valueHolder4eeab;
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
        $this->initializerb3a7f && ($this->initializerb3a7f->__invoke($valueHolder4eeab, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerb3a7f) || 1) && $this->valueHolder4eeab = $valueHolder4eeab;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder4eeab;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder4eeab;
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
        $this->initializerb3a7f && ($this->initializerb3a7f->__invoke($valueHolder4eeab, $this, '__isset', array('name' => $name), $this->initializerb3a7f) || 1) && $this->valueHolder4eeab = $valueHolder4eeab;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder4eeab;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder4eeab;
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
        $this->initializerb3a7f && ($this->initializerb3a7f->__invoke($valueHolder4eeab, $this, '__unset', array('name' => $name), $this->initializerb3a7f) || 1) && $this->valueHolder4eeab = $valueHolder4eeab;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder4eeab;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder4eeab;
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
        $this->initializerb3a7f && ($this->initializerb3a7f->__invoke($valueHolder4eeab, $this, '__clone', array(), $this->initializerb3a7f) || 1) && $this->valueHolder4eeab = $valueHolder4eeab;

        $this->valueHolder4eeab = clone $this->valueHolder4eeab;
    }

    public function __sleep()
    {
        $this->initializerb3a7f && ($this->initializerb3a7f->__invoke($valueHolder4eeab, $this, '__sleep', array(), $this->initializerb3a7f) || 1) && $this->valueHolder4eeab = $valueHolder4eeab;

        return array('valueHolder4eeab');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializerb3a7f = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializerb3a7f;
    }

    public function initializeProxy() : bool
    {
        return $this->initializerb3a7f && ($this->initializerb3a7f->__invoke($valueHolder4eeab, $this, 'initializeProxy', array(), $this->initializerb3a7f) || 1) && $this->valueHolder4eeab = $valueHolder4eeab;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder4eeab;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder4eeab;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
