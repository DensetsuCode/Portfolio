<?php

namespace ContainerJnCqDi1;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/src/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder6b77a = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer9661d = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties676e3 = [
        
    ];

    public function getConnection()
    {
        $this->initializer9661d && ($this->initializer9661d->__invoke($valueHolder6b77a, $this, 'getConnection', array(), $this->initializer9661d) || 1) && $this->valueHolder6b77a = $valueHolder6b77a;

        return $this->valueHolder6b77a->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer9661d && ($this->initializer9661d->__invoke($valueHolder6b77a, $this, 'getMetadataFactory', array(), $this->initializer9661d) || 1) && $this->valueHolder6b77a = $valueHolder6b77a;

        return $this->valueHolder6b77a->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer9661d && ($this->initializer9661d->__invoke($valueHolder6b77a, $this, 'getExpressionBuilder', array(), $this->initializer9661d) || 1) && $this->valueHolder6b77a = $valueHolder6b77a;

        return $this->valueHolder6b77a->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer9661d && ($this->initializer9661d->__invoke($valueHolder6b77a, $this, 'beginTransaction', array(), $this->initializer9661d) || 1) && $this->valueHolder6b77a = $valueHolder6b77a;

        return $this->valueHolder6b77a->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer9661d && ($this->initializer9661d->__invoke($valueHolder6b77a, $this, 'getCache', array(), $this->initializer9661d) || 1) && $this->valueHolder6b77a = $valueHolder6b77a;

        return $this->valueHolder6b77a->getCache();
    }

    public function transactional($func)
    {
        $this->initializer9661d && ($this->initializer9661d->__invoke($valueHolder6b77a, $this, 'transactional', array('func' => $func), $this->initializer9661d) || 1) && $this->valueHolder6b77a = $valueHolder6b77a;

        return $this->valueHolder6b77a->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer9661d && ($this->initializer9661d->__invoke($valueHolder6b77a, $this, 'wrapInTransaction', array('func' => $func), $this->initializer9661d) || 1) && $this->valueHolder6b77a = $valueHolder6b77a;

        return $this->valueHolder6b77a->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer9661d && ($this->initializer9661d->__invoke($valueHolder6b77a, $this, 'commit', array(), $this->initializer9661d) || 1) && $this->valueHolder6b77a = $valueHolder6b77a;

        return $this->valueHolder6b77a->commit();
    }

    public function rollback()
    {
        $this->initializer9661d && ($this->initializer9661d->__invoke($valueHolder6b77a, $this, 'rollback', array(), $this->initializer9661d) || 1) && $this->valueHolder6b77a = $valueHolder6b77a;

        return $this->valueHolder6b77a->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer9661d && ($this->initializer9661d->__invoke($valueHolder6b77a, $this, 'getClassMetadata', array('className' => $className), $this->initializer9661d) || 1) && $this->valueHolder6b77a = $valueHolder6b77a;

        return $this->valueHolder6b77a->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer9661d && ($this->initializer9661d->__invoke($valueHolder6b77a, $this, 'createQuery', array('dql' => $dql), $this->initializer9661d) || 1) && $this->valueHolder6b77a = $valueHolder6b77a;

        return $this->valueHolder6b77a->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer9661d && ($this->initializer9661d->__invoke($valueHolder6b77a, $this, 'createNamedQuery', array('name' => $name), $this->initializer9661d) || 1) && $this->valueHolder6b77a = $valueHolder6b77a;

        return $this->valueHolder6b77a->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer9661d && ($this->initializer9661d->__invoke($valueHolder6b77a, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer9661d) || 1) && $this->valueHolder6b77a = $valueHolder6b77a;

        return $this->valueHolder6b77a->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer9661d && ($this->initializer9661d->__invoke($valueHolder6b77a, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer9661d) || 1) && $this->valueHolder6b77a = $valueHolder6b77a;

        return $this->valueHolder6b77a->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer9661d && ($this->initializer9661d->__invoke($valueHolder6b77a, $this, 'createQueryBuilder', array(), $this->initializer9661d) || 1) && $this->valueHolder6b77a = $valueHolder6b77a;

        return $this->valueHolder6b77a->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer9661d && ($this->initializer9661d->__invoke($valueHolder6b77a, $this, 'flush', array('entity' => $entity), $this->initializer9661d) || 1) && $this->valueHolder6b77a = $valueHolder6b77a;

        return $this->valueHolder6b77a->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer9661d && ($this->initializer9661d->__invoke($valueHolder6b77a, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer9661d) || 1) && $this->valueHolder6b77a = $valueHolder6b77a;

        return $this->valueHolder6b77a->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer9661d && ($this->initializer9661d->__invoke($valueHolder6b77a, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer9661d) || 1) && $this->valueHolder6b77a = $valueHolder6b77a;

        return $this->valueHolder6b77a->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer9661d && ($this->initializer9661d->__invoke($valueHolder6b77a, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer9661d) || 1) && $this->valueHolder6b77a = $valueHolder6b77a;

        return $this->valueHolder6b77a->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer9661d && ($this->initializer9661d->__invoke($valueHolder6b77a, $this, 'clear', array('entityName' => $entityName), $this->initializer9661d) || 1) && $this->valueHolder6b77a = $valueHolder6b77a;

        return $this->valueHolder6b77a->clear($entityName);
    }

    public function close()
    {
        $this->initializer9661d && ($this->initializer9661d->__invoke($valueHolder6b77a, $this, 'close', array(), $this->initializer9661d) || 1) && $this->valueHolder6b77a = $valueHolder6b77a;

        return $this->valueHolder6b77a->close();
    }

    public function persist($entity)
    {
        $this->initializer9661d && ($this->initializer9661d->__invoke($valueHolder6b77a, $this, 'persist', array('entity' => $entity), $this->initializer9661d) || 1) && $this->valueHolder6b77a = $valueHolder6b77a;

        return $this->valueHolder6b77a->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer9661d && ($this->initializer9661d->__invoke($valueHolder6b77a, $this, 'remove', array('entity' => $entity), $this->initializer9661d) || 1) && $this->valueHolder6b77a = $valueHolder6b77a;

        return $this->valueHolder6b77a->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer9661d && ($this->initializer9661d->__invoke($valueHolder6b77a, $this, 'refresh', array('entity' => $entity), $this->initializer9661d) || 1) && $this->valueHolder6b77a = $valueHolder6b77a;

        return $this->valueHolder6b77a->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer9661d && ($this->initializer9661d->__invoke($valueHolder6b77a, $this, 'detach', array('entity' => $entity), $this->initializer9661d) || 1) && $this->valueHolder6b77a = $valueHolder6b77a;

        return $this->valueHolder6b77a->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer9661d && ($this->initializer9661d->__invoke($valueHolder6b77a, $this, 'merge', array('entity' => $entity), $this->initializer9661d) || 1) && $this->valueHolder6b77a = $valueHolder6b77a;

        return $this->valueHolder6b77a->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer9661d && ($this->initializer9661d->__invoke($valueHolder6b77a, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer9661d) || 1) && $this->valueHolder6b77a = $valueHolder6b77a;

        return $this->valueHolder6b77a->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer9661d && ($this->initializer9661d->__invoke($valueHolder6b77a, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer9661d) || 1) && $this->valueHolder6b77a = $valueHolder6b77a;

        return $this->valueHolder6b77a->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer9661d && ($this->initializer9661d->__invoke($valueHolder6b77a, $this, 'getRepository', array('entityName' => $entityName), $this->initializer9661d) || 1) && $this->valueHolder6b77a = $valueHolder6b77a;

        return $this->valueHolder6b77a->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer9661d && ($this->initializer9661d->__invoke($valueHolder6b77a, $this, 'contains', array('entity' => $entity), $this->initializer9661d) || 1) && $this->valueHolder6b77a = $valueHolder6b77a;

        return $this->valueHolder6b77a->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer9661d && ($this->initializer9661d->__invoke($valueHolder6b77a, $this, 'getEventManager', array(), $this->initializer9661d) || 1) && $this->valueHolder6b77a = $valueHolder6b77a;

        return $this->valueHolder6b77a->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer9661d && ($this->initializer9661d->__invoke($valueHolder6b77a, $this, 'getConfiguration', array(), $this->initializer9661d) || 1) && $this->valueHolder6b77a = $valueHolder6b77a;

        return $this->valueHolder6b77a->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer9661d && ($this->initializer9661d->__invoke($valueHolder6b77a, $this, 'isOpen', array(), $this->initializer9661d) || 1) && $this->valueHolder6b77a = $valueHolder6b77a;

        return $this->valueHolder6b77a->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer9661d && ($this->initializer9661d->__invoke($valueHolder6b77a, $this, 'getUnitOfWork', array(), $this->initializer9661d) || 1) && $this->valueHolder6b77a = $valueHolder6b77a;

        return $this->valueHolder6b77a->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer9661d && ($this->initializer9661d->__invoke($valueHolder6b77a, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer9661d) || 1) && $this->valueHolder6b77a = $valueHolder6b77a;

        return $this->valueHolder6b77a->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer9661d && ($this->initializer9661d->__invoke($valueHolder6b77a, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer9661d) || 1) && $this->valueHolder6b77a = $valueHolder6b77a;

        return $this->valueHolder6b77a->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer9661d && ($this->initializer9661d->__invoke($valueHolder6b77a, $this, 'getProxyFactory', array(), $this->initializer9661d) || 1) && $this->valueHolder6b77a = $valueHolder6b77a;

        return $this->valueHolder6b77a->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer9661d && ($this->initializer9661d->__invoke($valueHolder6b77a, $this, 'initializeObject', array('obj' => $obj), $this->initializer9661d) || 1) && $this->valueHolder6b77a = $valueHolder6b77a;

        return $this->valueHolder6b77a->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer9661d && ($this->initializer9661d->__invoke($valueHolder6b77a, $this, 'getFilters', array(), $this->initializer9661d) || 1) && $this->valueHolder6b77a = $valueHolder6b77a;

        return $this->valueHolder6b77a->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer9661d && ($this->initializer9661d->__invoke($valueHolder6b77a, $this, 'isFiltersStateClean', array(), $this->initializer9661d) || 1) && $this->valueHolder6b77a = $valueHolder6b77a;

        return $this->valueHolder6b77a->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer9661d && ($this->initializer9661d->__invoke($valueHolder6b77a, $this, 'hasFilters', array(), $this->initializer9661d) || 1) && $this->valueHolder6b77a = $valueHolder6b77a;

        return $this->valueHolder6b77a->hasFilters();
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

        $instance->initializer9661d = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder6b77a) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder6b77a = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder6b77a->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer9661d && ($this->initializer9661d->__invoke($valueHolder6b77a, $this, '__get', ['name' => $name], $this->initializer9661d) || 1) && $this->valueHolder6b77a = $valueHolder6b77a;

        if (isset(self::$publicProperties676e3[$name])) {
            return $this->valueHolder6b77a->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder6b77a;

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

        $targetObject = $this->valueHolder6b77a;
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
        $this->initializer9661d && ($this->initializer9661d->__invoke($valueHolder6b77a, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer9661d) || 1) && $this->valueHolder6b77a = $valueHolder6b77a;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder6b77a;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder6b77a;
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
        $this->initializer9661d && ($this->initializer9661d->__invoke($valueHolder6b77a, $this, '__isset', array('name' => $name), $this->initializer9661d) || 1) && $this->valueHolder6b77a = $valueHolder6b77a;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder6b77a;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder6b77a;
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
        $this->initializer9661d && ($this->initializer9661d->__invoke($valueHolder6b77a, $this, '__unset', array('name' => $name), $this->initializer9661d) || 1) && $this->valueHolder6b77a = $valueHolder6b77a;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder6b77a;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder6b77a;
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
        $this->initializer9661d && ($this->initializer9661d->__invoke($valueHolder6b77a, $this, '__clone', array(), $this->initializer9661d) || 1) && $this->valueHolder6b77a = $valueHolder6b77a;

        $this->valueHolder6b77a = clone $this->valueHolder6b77a;
    }

    public function __sleep()
    {
        $this->initializer9661d && ($this->initializer9661d->__invoke($valueHolder6b77a, $this, '__sleep', array(), $this->initializer9661d) || 1) && $this->valueHolder6b77a = $valueHolder6b77a;

        return array('valueHolder6b77a');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer9661d = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer9661d;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer9661d && ($this->initializer9661d->__invoke($valueHolder6b77a, $this, 'initializeProxy', array(), $this->initializer9661d) || 1) && $this->valueHolder6b77a = $valueHolder6b77a;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder6b77a;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder6b77a;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
