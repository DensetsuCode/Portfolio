<?php

namespace ContainerKxFfWLp;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/src/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder24c85 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializerb7a48 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesfeb0c = [
        
    ];

    public function getConnection()
    {
        $this->initializerb7a48 && ($this->initializerb7a48->__invoke($valueHolder24c85, $this, 'getConnection', array(), $this->initializerb7a48) || 1) && $this->valueHolder24c85 = $valueHolder24c85;

        return $this->valueHolder24c85->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializerb7a48 && ($this->initializerb7a48->__invoke($valueHolder24c85, $this, 'getMetadataFactory', array(), $this->initializerb7a48) || 1) && $this->valueHolder24c85 = $valueHolder24c85;

        return $this->valueHolder24c85->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializerb7a48 && ($this->initializerb7a48->__invoke($valueHolder24c85, $this, 'getExpressionBuilder', array(), $this->initializerb7a48) || 1) && $this->valueHolder24c85 = $valueHolder24c85;

        return $this->valueHolder24c85->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializerb7a48 && ($this->initializerb7a48->__invoke($valueHolder24c85, $this, 'beginTransaction', array(), $this->initializerb7a48) || 1) && $this->valueHolder24c85 = $valueHolder24c85;

        return $this->valueHolder24c85->beginTransaction();
    }

    public function getCache()
    {
        $this->initializerb7a48 && ($this->initializerb7a48->__invoke($valueHolder24c85, $this, 'getCache', array(), $this->initializerb7a48) || 1) && $this->valueHolder24c85 = $valueHolder24c85;

        return $this->valueHolder24c85->getCache();
    }

    public function transactional($func)
    {
        $this->initializerb7a48 && ($this->initializerb7a48->__invoke($valueHolder24c85, $this, 'transactional', array('func' => $func), $this->initializerb7a48) || 1) && $this->valueHolder24c85 = $valueHolder24c85;

        return $this->valueHolder24c85->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializerb7a48 && ($this->initializerb7a48->__invoke($valueHolder24c85, $this, 'wrapInTransaction', array('func' => $func), $this->initializerb7a48) || 1) && $this->valueHolder24c85 = $valueHolder24c85;

        return $this->valueHolder24c85->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializerb7a48 && ($this->initializerb7a48->__invoke($valueHolder24c85, $this, 'commit', array(), $this->initializerb7a48) || 1) && $this->valueHolder24c85 = $valueHolder24c85;

        return $this->valueHolder24c85->commit();
    }

    public function rollback()
    {
        $this->initializerb7a48 && ($this->initializerb7a48->__invoke($valueHolder24c85, $this, 'rollback', array(), $this->initializerb7a48) || 1) && $this->valueHolder24c85 = $valueHolder24c85;

        return $this->valueHolder24c85->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializerb7a48 && ($this->initializerb7a48->__invoke($valueHolder24c85, $this, 'getClassMetadata', array('className' => $className), $this->initializerb7a48) || 1) && $this->valueHolder24c85 = $valueHolder24c85;

        return $this->valueHolder24c85->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializerb7a48 && ($this->initializerb7a48->__invoke($valueHolder24c85, $this, 'createQuery', array('dql' => $dql), $this->initializerb7a48) || 1) && $this->valueHolder24c85 = $valueHolder24c85;

        return $this->valueHolder24c85->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializerb7a48 && ($this->initializerb7a48->__invoke($valueHolder24c85, $this, 'createNamedQuery', array('name' => $name), $this->initializerb7a48) || 1) && $this->valueHolder24c85 = $valueHolder24c85;

        return $this->valueHolder24c85->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializerb7a48 && ($this->initializerb7a48->__invoke($valueHolder24c85, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializerb7a48) || 1) && $this->valueHolder24c85 = $valueHolder24c85;

        return $this->valueHolder24c85->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializerb7a48 && ($this->initializerb7a48->__invoke($valueHolder24c85, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializerb7a48) || 1) && $this->valueHolder24c85 = $valueHolder24c85;

        return $this->valueHolder24c85->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializerb7a48 && ($this->initializerb7a48->__invoke($valueHolder24c85, $this, 'createQueryBuilder', array(), $this->initializerb7a48) || 1) && $this->valueHolder24c85 = $valueHolder24c85;

        return $this->valueHolder24c85->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializerb7a48 && ($this->initializerb7a48->__invoke($valueHolder24c85, $this, 'flush', array('entity' => $entity), $this->initializerb7a48) || 1) && $this->valueHolder24c85 = $valueHolder24c85;

        return $this->valueHolder24c85->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializerb7a48 && ($this->initializerb7a48->__invoke($valueHolder24c85, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerb7a48) || 1) && $this->valueHolder24c85 = $valueHolder24c85;

        return $this->valueHolder24c85->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializerb7a48 && ($this->initializerb7a48->__invoke($valueHolder24c85, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializerb7a48) || 1) && $this->valueHolder24c85 = $valueHolder24c85;

        return $this->valueHolder24c85->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializerb7a48 && ($this->initializerb7a48->__invoke($valueHolder24c85, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializerb7a48) || 1) && $this->valueHolder24c85 = $valueHolder24c85;

        return $this->valueHolder24c85->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializerb7a48 && ($this->initializerb7a48->__invoke($valueHolder24c85, $this, 'clear', array('entityName' => $entityName), $this->initializerb7a48) || 1) && $this->valueHolder24c85 = $valueHolder24c85;

        return $this->valueHolder24c85->clear($entityName);
    }

    public function close()
    {
        $this->initializerb7a48 && ($this->initializerb7a48->__invoke($valueHolder24c85, $this, 'close', array(), $this->initializerb7a48) || 1) && $this->valueHolder24c85 = $valueHolder24c85;

        return $this->valueHolder24c85->close();
    }

    public function persist($entity)
    {
        $this->initializerb7a48 && ($this->initializerb7a48->__invoke($valueHolder24c85, $this, 'persist', array('entity' => $entity), $this->initializerb7a48) || 1) && $this->valueHolder24c85 = $valueHolder24c85;

        return $this->valueHolder24c85->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializerb7a48 && ($this->initializerb7a48->__invoke($valueHolder24c85, $this, 'remove', array('entity' => $entity), $this->initializerb7a48) || 1) && $this->valueHolder24c85 = $valueHolder24c85;

        return $this->valueHolder24c85->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializerb7a48 && ($this->initializerb7a48->__invoke($valueHolder24c85, $this, 'refresh', array('entity' => $entity), $this->initializerb7a48) || 1) && $this->valueHolder24c85 = $valueHolder24c85;

        return $this->valueHolder24c85->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializerb7a48 && ($this->initializerb7a48->__invoke($valueHolder24c85, $this, 'detach', array('entity' => $entity), $this->initializerb7a48) || 1) && $this->valueHolder24c85 = $valueHolder24c85;

        return $this->valueHolder24c85->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializerb7a48 && ($this->initializerb7a48->__invoke($valueHolder24c85, $this, 'merge', array('entity' => $entity), $this->initializerb7a48) || 1) && $this->valueHolder24c85 = $valueHolder24c85;

        return $this->valueHolder24c85->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializerb7a48 && ($this->initializerb7a48->__invoke($valueHolder24c85, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializerb7a48) || 1) && $this->valueHolder24c85 = $valueHolder24c85;

        return $this->valueHolder24c85->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializerb7a48 && ($this->initializerb7a48->__invoke($valueHolder24c85, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerb7a48) || 1) && $this->valueHolder24c85 = $valueHolder24c85;

        return $this->valueHolder24c85->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializerb7a48 && ($this->initializerb7a48->__invoke($valueHolder24c85, $this, 'getRepository', array('entityName' => $entityName), $this->initializerb7a48) || 1) && $this->valueHolder24c85 = $valueHolder24c85;

        return $this->valueHolder24c85->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializerb7a48 && ($this->initializerb7a48->__invoke($valueHolder24c85, $this, 'contains', array('entity' => $entity), $this->initializerb7a48) || 1) && $this->valueHolder24c85 = $valueHolder24c85;

        return $this->valueHolder24c85->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializerb7a48 && ($this->initializerb7a48->__invoke($valueHolder24c85, $this, 'getEventManager', array(), $this->initializerb7a48) || 1) && $this->valueHolder24c85 = $valueHolder24c85;

        return $this->valueHolder24c85->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializerb7a48 && ($this->initializerb7a48->__invoke($valueHolder24c85, $this, 'getConfiguration', array(), $this->initializerb7a48) || 1) && $this->valueHolder24c85 = $valueHolder24c85;

        return $this->valueHolder24c85->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializerb7a48 && ($this->initializerb7a48->__invoke($valueHolder24c85, $this, 'isOpen', array(), $this->initializerb7a48) || 1) && $this->valueHolder24c85 = $valueHolder24c85;

        return $this->valueHolder24c85->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializerb7a48 && ($this->initializerb7a48->__invoke($valueHolder24c85, $this, 'getUnitOfWork', array(), $this->initializerb7a48) || 1) && $this->valueHolder24c85 = $valueHolder24c85;

        return $this->valueHolder24c85->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializerb7a48 && ($this->initializerb7a48->__invoke($valueHolder24c85, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializerb7a48) || 1) && $this->valueHolder24c85 = $valueHolder24c85;

        return $this->valueHolder24c85->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializerb7a48 && ($this->initializerb7a48->__invoke($valueHolder24c85, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializerb7a48) || 1) && $this->valueHolder24c85 = $valueHolder24c85;

        return $this->valueHolder24c85->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializerb7a48 && ($this->initializerb7a48->__invoke($valueHolder24c85, $this, 'getProxyFactory', array(), $this->initializerb7a48) || 1) && $this->valueHolder24c85 = $valueHolder24c85;

        return $this->valueHolder24c85->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializerb7a48 && ($this->initializerb7a48->__invoke($valueHolder24c85, $this, 'initializeObject', array('obj' => $obj), $this->initializerb7a48) || 1) && $this->valueHolder24c85 = $valueHolder24c85;

        return $this->valueHolder24c85->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializerb7a48 && ($this->initializerb7a48->__invoke($valueHolder24c85, $this, 'getFilters', array(), $this->initializerb7a48) || 1) && $this->valueHolder24c85 = $valueHolder24c85;

        return $this->valueHolder24c85->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializerb7a48 && ($this->initializerb7a48->__invoke($valueHolder24c85, $this, 'isFiltersStateClean', array(), $this->initializerb7a48) || 1) && $this->valueHolder24c85 = $valueHolder24c85;

        return $this->valueHolder24c85->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializerb7a48 && ($this->initializerb7a48->__invoke($valueHolder24c85, $this, 'hasFilters', array(), $this->initializerb7a48) || 1) && $this->valueHolder24c85 = $valueHolder24c85;

        return $this->valueHolder24c85->hasFilters();
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

        $instance->initializerb7a48 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder24c85) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder24c85 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder24c85->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializerb7a48 && ($this->initializerb7a48->__invoke($valueHolder24c85, $this, '__get', ['name' => $name], $this->initializerb7a48) || 1) && $this->valueHolder24c85 = $valueHolder24c85;

        if (isset(self::$publicPropertiesfeb0c[$name])) {
            return $this->valueHolder24c85->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder24c85;

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

        $targetObject = $this->valueHolder24c85;
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
        $this->initializerb7a48 && ($this->initializerb7a48->__invoke($valueHolder24c85, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerb7a48) || 1) && $this->valueHolder24c85 = $valueHolder24c85;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder24c85;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder24c85;
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
        $this->initializerb7a48 && ($this->initializerb7a48->__invoke($valueHolder24c85, $this, '__isset', array('name' => $name), $this->initializerb7a48) || 1) && $this->valueHolder24c85 = $valueHolder24c85;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder24c85;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder24c85;
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
        $this->initializerb7a48 && ($this->initializerb7a48->__invoke($valueHolder24c85, $this, '__unset', array('name' => $name), $this->initializerb7a48) || 1) && $this->valueHolder24c85 = $valueHolder24c85;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder24c85;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder24c85;
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
        $this->initializerb7a48 && ($this->initializerb7a48->__invoke($valueHolder24c85, $this, '__clone', array(), $this->initializerb7a48) || 1) && $this->valueHolder24c85 = $valueHolder24c85;

        $this->valueHolder24c85 = clone $this->valueHolder24c85;
    }

    public function __sleep()
    {
        $this->initializerb7a48 && ($this->initializerb7a48->__invoke($valueHolder24c85, $this, '__sleep', array(), $this->initializerb7a48) || 1) && $this->valueHolder24c85 = $valueHolder24c85;

        return array('valueHolder24c85');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializerb7a48 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializerb7a48;
    }

    public function initializeProxy() : bool
    {
        return $this->initializerb7a48 && ($this->initializerb7a48->__invoke($valueHolder24c85, $this, 'initializeProxy', array(), $this->initializerb7a48) || 1) && $this->valueHolder24c85 = $valueHolder24c85;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder24c85;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder24c85;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
