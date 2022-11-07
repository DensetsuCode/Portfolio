<?php

namespace Container6J73KS6;

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    private $valueHolder6bbf0 = null;
    private $initializer58cc4 = null;
    private static $publicPropertiesf9a26 = [
        
    ];
    public function getConnection()
    {
        $this->initializer58cc4 && ($this->initializer58cc4->__invoke($valueHolder6bbf0, $this, 'getConnection', array(), $this->initializer58cc4) || 1) && $this->valueHolder6bbf0 = $valueHolder6bbf0;
        return $this->valueHolder6bbf0->getConnection();
    }
    public function getMetadataFactory()
    {
        $this->initializer58cc4 && ($this->initializer58cc4->__invoke($valueHolder6bbf0, $this, 'getMetadataFactory', array(), $this->initializer58cc4) || 1) && $this->valueHolder6bbf0 = $valueHolder6bbf0;
        return $this->valueHolder6bbf0->getMetadataFactory();
    }
    public function getExpressionBuilder()
    {
        $this->initializer58cc4 && ($this->initializer58cc4->__invoke($valueHolder6bbf0, $this, 'getExpressionBuilder', array(), $this->initializer58cc4) || 1) && $this->valueHolder6bbf0 = $valueHolder6bbf0;
        return $this->valueHolder6bbf0->getExpressionBuilder();
    }
    public function beginTransaction()
    {
        $this->initializer58cc4 && ($this->initializer58cc4->__invoke($valueHolder6bbf0, $this, 'beginTransaction', array(), $this->initializer58cc4) || 1) && $this->valueHolder6bbf0 = $valueHolder6bbf0;
        return $this->valueHolder6bbf0->beginTransaction();
    }
    public function getCache()
    {
        $this->initializer58cc4 && ($this->initializer58cc4->__invoke($valueHolder6bbf0, $this, 'getCache', array(), $this->initializer58cc4) || 1) && $this->valueHolder6bbf0 = $valueHolder6bbf0;
        return $this->valueHolder6bbf0->getCache();
    }
    public function transactional($func)
    {
        $this->initializer58cc4 && ($this->initializer58cc4->__invoke($valueHolder6bbf0, $this, 'transactional', array('func' => $func), $this->initializer58cc4) || 1) && $this->valueHolder6bbf0 = $valueHolder6bbf0;
        return $this->valueHolder6bbf0->transactional($func);
    }
    public function wrapInTransaction(callable $func)
    {
        $this->initializer58cc4 && ($this->initializer58cc4->__invoke($valueHolder6bbf0, $this, 'wrapInTransaction', array('func' => $func), $this->initializer58cc4) || 1) && $this->valueHolder6bbf0 = $valueHolder6bbf0;
        return $this->valueHolder6bbf0->wrapInTransaction($func);
    }
    public function commit()
    {
        $this->initializer58cc4 && ($this->initializer58cc4->__invoke($valueHolder6bbf0, $this, 'commit', array(), $this->initializer58cc4) || 1) && $this->valueHolder6bbf0 = $valueHolder6bbf0;
        return $this->valueHolder6bbf0->commit();
    }
    public function rollback()
    {
        $this->initializer58cc4 && ($this->initializer58cc4->__invoke($valueHolder6bbf0, $this, 'rollback', array(), $this->initializer58cc4) || 1) && $this->valueHolder6bbf0 = $valueHolder6bbf0;
        return $this->valueHolder6bbf0->rollback();
    }
    public function getClassMetadata($className)
    {
        $this->initializer58cc4 && ($this->initializer58cc4->__invoke($valueHolder6bbf0, $this, 'getClassMetadata', array('className' => $className), $this->initializer58cc4) || 1) && $this->valueHolder6bbf0 = $valueHolder6bbf0;
        return $this->valueHolder6bbf0->getClassMetadata($className);
    }
    public function createQuery($dql = '')
    {
        $this->initializer58cc4 && ($this->initializer58cc4->__invoke($valueHolder6bbf0, $this, 'createQuery', array('dql' => $dql), $this->initializer58cc4) || 1) && $this->valueHolder6bbf0 = $valueHolder6bbf0;
        return $this->valueHolder6bbf0->createQuery($dql);
    }
    public function createNamedQuery($name)
    {
        $this->initializer58cc4 && ($this->initializer58cc4->__invoke($valueHolder6bbf0, $this, 'createNamedQuery', array('name' => $name), $this->initializer58cc4) || 1) && $this->valueHolder6bbf0 = $valueHolder6bbf0;
        return $this->valueHolder6bbf0->createNamedQuery($name);
    }
    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer58cc4 && ($this->initializer58cc4->__invoke($valueHolder6bbf0, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer58cc4) || 1) && $this->valueHolder6bbf0 = $valueHolder6bbf0;
        return $this->valueHolder6bbf0->createNativeQuery($sql, $rsm);
    }
    public function createNamedNativeQuery($name)
    {
        $this->initializer58cc4 && ($this->initializer58cc4->__invoke($valueHolder6bbf0, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer58cc4) || 1) && $this->valueHolder6bbf0 = $valueHolder6bbf0;
        return $this->valueHolder6bbf0->createNamedNativeQuery($name);
    }
    public function createQueryBuilder()
    {
        $this->initializer58cc4 && ($this->initializer58cc4->__invoke($valueHolder6bbf0, $this, 'createQueryBuilder', array(), $this->initializer58cc4) || 1) && $this->valueHolder6bbf0 = $valueHolder6bbf0;
        return $this->valueHolder6bbf0->createQueryBuilder();
    }
    public function flush($entity = null)
    {
        $this->initializer58cc4 && ($this->initializer58cc4->__invoke($valueHolder6bbf0, $this, 'flush', array('entity' => $entity), $this->initializer58cc4) || 1) && $this->valueHolder6bbf0 = $valueHolder6bbf0;
        return $this->valueHolder6bbf0->flush($entity);
    }
    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer58cc4 && ($this->initializer58cc4->__invoke($valueHolder6bbf0, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer58cc4) || 1) && $this->valueHolder6bbf0 = $valueHolder6bbf0;
        return $this->valueHolder6bbf0->find($className, $id, $lockMode, $lockVersion);
    }
    public function getReference($entityName, $id)
    {
        $this->initializer58cc4 && ($this->initializer58cc4->__invoke($valueHolder6bbf0, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer58cc4) || 1) && $this->valueHolder6bbf0 = $valueHolder6bbf0;
        return $this->valueHolder6bbf0->getReference($entityName, $id);
    }
    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer58cc4 && ($this->initializer58cc4->__invoke($valueHolder6bbf0, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer58cc4) || 1) && $this->valueHolder6bbf0 = $valueHolder6bbf0;
        return $this->valueHolder6bbf0->getPartialReference($entityName, $identifier);
    }
    public function clear($entityName = null)
    {
        $this->initializer58cc4 && ($this->initializer58cc4->__invoke($valueHolder6bbf0, $this, 'clear', array('entityName' => $entityName), $this->initializer58cc4) || 1) && $this->valueHolder6bbf0 = $valueHolder6bbf0;
        return $this->valueHolder6bbf0->clear($entityName);
    }
    public function close()
    {
        $this->initializer58cc4 && ($this->initializer58cc4->__invoke($valueHolder6bbf0, $this, 'close', array(), $this->initializer58cc4) || 1) && $this->valueHolder6bbf0 = $valueHolder6bbf0;
        return $this->valueHolder6bbf0->close();
    }
    public function persist($entity)
    {
        $this->initializer58cc4 && ($this->initializer58cc4->__invoke($valueHolder6bbf0, $this, 'persist', array('entity' => $entity), $this->initializer58cc4) || 1) && $this->valueHolder6bbf0 = $valueHolder6bbf0;
        return $this->valueHolder6bbf0->persist($entity);
    }
    public function remove($entity)
    {
        $this->initializer58cc4 && ($this->initializer58cc4->__invoke($valueHolder6bbf0, $this, 'remove', array('entity' => $entity), $this->initializer58cc4) || 1) && $this->valueHolder6bbf0 = $valueHolder6bbf0;
        return $this->valueHolder6bbf0->remove($entity);
    }
    public function refresh($entity)
    {
        $this->initializer58cc4 && ($this->initializer58cc4->__invoke($valueHolder6bbf0, $this, 'refresh', array('entity' => $entity), $this->initializer58cc4) || 1) && $this->valueHolder6bbf0 = $valueHolder6bbf0;
        return $this->valueHolder6bbf0->refresh($entity);
    }
    public function detach($entity)
    {
        $this->initializer58cc4 && ($this->initializer58cc4->__invoke($valueHolder6bbf0, $this, 'detach', array('entity' => $entity), $this->initializer58cc4) || 1) && $this->valueHolder6bbf0 = $valueHolder6bbf0;
        return $this->valueHolder6bbf0->detach($entity);
    }
    public function merge($entity)
    {
        $this->initializer58cc4 && ($this->initializer58cc4->__invoke($valueHolder6bbf0, $this, 'merge', array('entity' => $entity), $this->initializer58cc4) || 1) && $this->valueHolder6bbf0 = $valueHolder6bbf0;
        return $this->valueHolder6bbf0->merge($entity);
    }
    public function copy($entity, $deep = false)
    {
        $this->initializer58cc4 && ($this->initializer58cc4->__invoke($valueHolder6bbf0, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer58cc4) || 1) && $this->valueHolder6bbf0 = $valueHolder6bbf0;
        return $this->valueHolder6bbf0->copy($entity, $deep);
    }
    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer58cc4 && ($this->initializer58cc4->__invoke($valueHolder6bbf0, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer58cc4) || 1) && $this->valueHolder6bbf0 = $valueHolder6bbf0;
        return $this->valueHolder6bbf0->lock($entity, $lockMode, $lockVersion);
    }
    public function getRepository($entityName)
    {
        $this->initializer58cc4 && ($this->initializer58cc4->__invoke($valueHolder6bbf0, $this, 'getRepository', array('entityName' => $entityName), $this->initializer58cc4) || 1) && $this->valueHolder6bbf0 = $valueHolder6bbf0;
        return $this->valueHolder6bbf0->getRepository($entityName);
    }
    public function contains($entity)
    {
        $this->initializer58cc4 && ($this->initializer58cc4->__invoke($valueHolder6bbf0, $this, 'contains', array('entity' => $entity), $this->initializer58cc4) || 1) && $this->valueHolder6bbf0 = $valueHolder6bbf0;
        return $this->valueHolder6bbf0->contains($entity);
    }
    public function getEventManager()
    {
        $this->initializer58cc4 && ($this->initializer58cc4->__invoke($valueHolder6bbf0, $this, 'getEventManager', array(), $this->initializer58cc4) || 1) && $this->valueHolder6bbf0 = $valueHolder6bbf0;
        return $this->valueHolder6bbf0->getEventManager();
    }
    public function getConfiguration()
    {
        $this->initializer58cc4 && ($this->initializer58cc4->__invoke($valueHolder6bbf0, $this, 'getConfiguration', array(), $this->initializer58cc4) || 1) && $this->valueHolder6bbf0 = $valueHolder6bbf0;
        return $this->valueHolder6bbf0->getConfiguration();
    }
    public function isOpen()
    {
        $this->initializer58cc4 && ($this->initializer58cc4->__invoke($valueHolder6bbf0, $this, 'isOpen', array(), $this->initializer58cc4) || 1) && $this->valueHolder6bbf0 = $valueHolder6bbf0;
        return $this->valueHolder6bbf0->isOpen();
    }
    public function getUnitOfWork()
    {
        $this->initializer58cc4 && ($this->initializer58cc4->__invoke($valueHolder6bbf0, $this, 'getUnitOfWork', array(), $this->initializer58cc4) || 1) && $this->valueHolder6bbf0 = $valueHolder6bbf0;
        return $this->valueHolder6bbf0->getUnitOfWork();
    }
    public function getHydrator($hydrationMode)
    {
        $this->initializer58cc4 && ($this->initializer58cc4->__invoke($valueHolder6bbf0, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer58cc4) || 1) && $this->valueHolder6bbf0 = $valueHolder6bbf0;
        return $this->valueHolder6bbf0->getHydrator($hydrationMode);
    }
    public function newHydrator($hydrationMode)
    {
        $this->initializer58cc4 && ($this->initializer58cc4->__invoke($valueHolder6bbf0, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer58cc4) || 1) && $this->valueHolder6bbf0 = $valueHolder6bbf0;
        return $this->valueHolder6bbf0->newHydrator($hydrationMode);
    }
    public function getProxyFactory()
    {
        $this->initializer58cc4 && ($this->initializer58cc4->__invoke($valueHolder6bbf0, $this, 'getProxyFactory', array(), $this->initializer58cc4) || 1) && $this->valueHolder6bbf0 = $valueHolder6bbf0;
        return $this->valueHolder6bbf0->getProxyFactory();
    }
    public function initializeObject($obj)
    {
        $this->initializer58cc4 && ($this->initializer58cc4->__invoke($valueHolder6bbf0, $this, 'initializeObject', array('obj' => $obj), $this->initializer58cc4) || 1) && $this->valueHolder6bbf0 = $valueHolder6bbf0;
        return $this->valueHolder6bbf0->initializeObject($obj);
    }
    public function getFilters()
    {
        $this->initializer58cc4 && ($this->initializer58cc4->__invoke($valueHolder6bbf0, $this, 'getFilters', array(), $this->initializer58cc4) || 1) && $this->valueHolder6bbf0 = $valueHolder6bbf0;
        return $this->valueHolder6bbf0->getFilters();
    }
    public function isFiltersStateClean()
    {
        $this->initializer58cc4 && ($this->initializer58cc4->__invoke($valueHolder6bbf0, $this, 'isFiltersStateClean', array(), $this->initializer58cc4) || 1) && $this->valueHolder6bbf0 = $valueHolder6bbf0;
        return $this->valueHolder6bbf0->isFiltersStateClean();
    }
    public function hasFilters()
    {
        $this->initializer58cc4 && ($this->initializer58cc4->__invoke($valueHolder6bbf0, $this, 'hasFilters', array(), $this->initializer58cc4) || 1) && $this->valueHolder6bbf0 = $valueHolder6bbf0;
        return $this->valueHolder6bbf0->hasFilters();
    }
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;
        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $instance, 'Doctrine\\ORM\\EntityManager')->__invoke($instance);
        $instance->initializer58cc4 = $initializer;
        return $instance;
    }
    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;
        if (! $this->valueHolder6bbf0) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder6bbf0 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
        }
        $this->valueHolder6bbf0->__construct($conn, $config, $eventManager);
    }
    public function & __get($name)
    {
        $this->initializer58cc4 && ($this->initializer58cc4->__invoke($valueHolder6bbf0, $this, '__get', ['name' => $name], $this->initializer58cc4) || 1) && $this->valueHolder6bbf0 = $valueHolder6bbf0;
        if (isset(self::$publicPropertiesf9a26[$name])) {
            return $this->valueHolder6bbf0->$name;
        }
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder6bbf0;
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
        $targetObject = $this->valueHolder6bbf0;
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
        $this->initializer58cc4 && ($this->initializer58cc4->__invoke($valueHolder6bbf0, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer58cc4) || 1) && $this->valueHolder6bbf0 = $valueHolder6bbf0;
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder6bbf0;
            $targetObject->$name = $value;
            return $targetObject->$name;
        }
        $targetObject = $this->valueHolder6bbf0;
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
        $this->initializer58cc4 && ($this->initializer58cc4->__invoke($valueHolder6bbf0, $this, '__isset', array('name' => $name), $this->initializer58cc4) || 1) && $this->valueHolder6bbf0 = $valueHolder6bbf0;
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder6bbf0;
            return isset($targetObject->$name);
        }
        $targetObject = $this->valueHolder6bbf0;
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
        $this->initializer58cc4 && ($this->initializer58cc4->__invoke($valueHolder6bbf0, $this, '__unset', array('name' => $name), $this->initializer58cc4) || 1) && $this->valueHolder6bbf0 = $valueHolder6bbf0;
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder6bbf0;
            unset($targetObject->$name);
            return;
        }
        $targetObject = $this->valueHolder6bbf0;
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
        $this->initializer58cc4 && ($this->initializer58cc4->__invoke($valueHolder6bbf0, $this, '__clone', array(), $this->initializer58cc4) || 1) && $this->valueHolder6bbf0 = $valueHolder6bbf0;
        $this->valueHolder6bbf0 = clone $this->valueHolder6bbf0;
    }
    public function __sleep()
    {
        $this->initializer58cc4 && ($this->initializer58cc4->__invoke($valueHolder6bbf0, $this, '__sleep', array(), $this->initializer58cc4) || 1) && $this->valueHolder6bbf0 = $valueHolder6bbf0;
        return array('valueHolder6bbf0');
    }
    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }
    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer58cc4 = $initializer;
    }
    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer58cc4;
    }
    public function initializeProxy() : bool
    {
        return $this->initializer58cc4 && ($this->initializer58cc4->__invoke($valueHolder6bbf0, $this, 'initializeProxy', array(), $this->initializer58cc4) || 1) && $this->valueHolder6bbf0 = $valueHolder6bbf0;
    }
    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder6bbf0;
    }
    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder6bbf0;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
