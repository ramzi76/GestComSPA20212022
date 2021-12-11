<?php

namespace ContainerCydjacx;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{

    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder95877 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer7bc76 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesc3378 = [
        
    ];

    public function getConnection()
    {
        $this->initializer7bc76 && ($this->initializer7bc76->__invoke($valueHolder95877, $this, 'getConnection', array(), $this->initializer7bc76) || 1) && $this->valueHolder95877 = $valueHolder95877;

        return $this->valueHolder95877->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer7bc76 && ($this->initializer7bc76->__invoke($valueHolder95877, $this, 'getMetadataFactory', array(), $this->initializer7bc76) || 1) && $this->valueHolder95877 = $valueHolder95877;

        return $this->valueHolder95877->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer7bc76 && ($this->initializer7bc76->__invoke($valueHolder95877, $this, 'getExpressionBuilder', array(), $this->initializer7bc76) || 1) && $this->valueHolder95877 = $valueHolder95877;

        return $this->valueHolder95877->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer7bc76 && ($this->initializer7bc76->__invoke($valueHolder95877, $this, 'beginTransaction', array(), $this->initializer7bc76) || 1) && $this->valueHolder95877 = $valueHolder95877;

        return $this->valueHolder95877->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer7bc76 && ($this->initializer7bc76->__invoke($valueHolder95877, $this, 'getCache', array(), $this->initializer7bc76) || 1) && $this->valueHolder95877 = $valueHolder95877;

        return $this->valueHolder95877->getCache();
    }

    public function transactional($func)
    {
        $this->initializer7bc76 && ($this->initializer7bc76->__invoke($valueHolder95877, $this, 'transactional', array('func' => $func), $this->initializer7bc76) || 1) && $this->valueHolder95877 = $valueHolder95877;

        return $this->valueHolder95877->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer7bc76 && ($this->initializer7bc76->__invoke($valueHolder95877, $this, 'wrapInTransaction', array('func' => $func), $this->initializer7bc76) || 1) && $this->valueHolder95877 = $valueHolder95877;

        return $this->valueHolder95877->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer7bc76 && ($this->initializer7bc76->__invoke($valueHolder95877, $this, 'commit', array(), $this->initializer7bc76) || 1) && $this->valueHolder95877 = $valueHolder95877;

        return $this->valueHolder95877->commit();
    }

    public function rollback()
    {
        $this->initializer7bc76 && ($this->initializer7bc76->__invoke($valueHolder95877, $this, 'rollback', array(), $this->initializer7bc76) || 1) && $this->valueHolder95877 = $valueHolder95877;

        return $this->valueHolder95877->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer7bc76 && ($this->initializer7bc76->__invoke($valueHolder95877, $this, 'getClassMetadata', array('className' => $className), $this->initializer7bc76) || 1) && $this->valueHolder95877 = $valueHolder95877;

        return $this->valueHolder95877->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer7bc76 && ($this->initializer7bc76->__invoke($valueHolder95877, $this, 'createQuery', array('dql' => $dql), $this->initializer7bc76) || 1) && $this->valueHolder95877 = $valueHolder95877;

        return $this->valueHolder95877->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer7bc76 && ($this->initializer7bc76->__invoke($valueHolder95877, $this, 'createNamedQuery', array('name' => $name), $this->initializer7bc76) || 1) && $this->valueHolder95877 = $valueHolder95877;

        return $this->valueHolder95877->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer7bc76 && ($this->initializer7bc76->__invoke($valueHolder95877, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer7bc76) || 1) && $this->valueHolder95877 = $valueHolder95877;

        return $this->valueHolder95877->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer7bc76 && ($this->initializer7bc76->__invoke($valueHolder95877, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer7bc76) || 1) && $this->valueHolder95877 = $valueHolder95877;

        return $this->valueHolder95877->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer7bc76 && ($this->initializer7bc76->__invoke($valueHolder95877, $this, 'createQueryBuilder', array(), $this->initializer7bc76) || 1) && $this->valueHolder95877 = $valueHolder95877;

        return $this->valueHolder95877->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer7bc76 && ($this->initializer7bc76->__invoke($valueHolder95877, $this, 'flush', array('entity' => $entity), $this->initializer7bc76) || 1) && $this->valueHolder95877 = $valueHolder95877;

        return $this->valueHolder95877->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer7bc76 && ($this->initializer7bc76->__invoke($valueHolder95877, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer7bc76) || 1) && $this->valueHolder95877 = $valueHolder95877;

        return $this->valueHolder95877->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer7bc76 && ($this->initializer7bc76->__invoke($valueHolder95877, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer7bc76) || 1) && $this->valueHolder95877 = $valueHolder95877;

        return $this->valueHolder95877->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer7bc76 && ($this->initializer7bc76->__invoke($valueHolder95877, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer7bc76) || 1) && $this->valueHolder95877 = $valueHolder95877;

        return $this->valueHolder95877->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer7bc76 && ($this->initializer7bc76->__invoke($valueHolder95877, $this, 'clear', array('entityName' => $entityName), $this->initializer7bc76) || 1) && $this->valueHolder95877 = $valueHolder95877;

        return $this->valueHolder95877->clear($entityName);
    }

    public function close()
    {
        $this->initializer7bc76 && ($this->initializer7bc76->__invoke($valueHolder95877, $this, 'close', array(), $this->initializer7bc76) || 1) && $this->valueHolder95877 = $valueHolder95877;

        return $this->valueHolder95877->close();
    }

    public function persist($entity)
    {
        $this->initializer7bc76 && ($this->initializer7bc76->__invoke($valueHolder95877, $this, 'persist', array('entity' => $entity), $this->initializer7bc76) || 1) && $this->valueHolder95877 = $valueHolder95877;

        return $this->valueHolder95877->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer7bc76 && ($this->initializer7bc76->__invoke($valueHolder95877, $this, 'remove', array('entity' => $entity), $this->initializer7bc76) || 1) && $this->valueHolder95877 = $valueHolder95877;

        return $this->valueHolder95877->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer7bc76 && ($this->initializer7bc76->__invoke($valueHolder95877, $this, 'refresh', array('entity' => $entity), $this->initializer7bc76) || 1) && $this->valueHolder95877 = $valueHolder95877;

        return $this->valueHolder95877->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer7bc76 && ($this->initializer7bc76->__invoke($valueHolder95877, $this, 'detach', array('entity' => $entity), $this->initializer7bc76) || 1) && $this->valueHolder95877 = $valueHolder95877;

        return $this->valueHolder95877->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer7bc76 && ($this->initializer7bc76->__invoke($valueHolder95877, $this, 'merge', array('entity' => $entity), $this->initializer7bc76) || 1) && $this->valueHolder95877 = $valueHolder95877;

        return $this->valueHolder95877->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer7bc76 && ($this->initializer7bc76->__invoke($valueHolder95877, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer7bc76) || 1) && $this->valueHolder95877 = $valueHolder95877;

        return $this->valueHolder95877->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer7bc76 && ($this->initializer7bc76->__invoke($valueHolder95877, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer7bc76) || 1) && $this->valueHolder95877 = $valueHolder95877;

        return $this->valueHolder95877->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer7bc76 && ($this->initializer7bc76->__invoke($valueHolder95877, $this, 'getRepository', array('entityName' => $entityName), $this->initializer7bc76) || 1) && $this->valueHolder95877 = $valueHolder95877;

        return $this->valueHolder95877->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer7bc76 && ($this->initializer7bc76->__invoke($valueHolder95877, $this, 'contains', array('entity' => $entity), $this->initializer7bc76) || 1) && $this->valueHolder95877 = $valueHolder95877;

        return $this->valueHolder95877->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer7bc76 && ($this->initializer7bc76->__invoke($valueHolder95877, $this, 'getEventManager', array(), $this->initializer7bc76) || 1) && $this->valueHolder95877 = $valueHolder95877;

        return $this->valueHolder95877->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer7bc76 && ($this->initializer7bc76->__invoke($valueHolder95877, $this, 'getConfiguration', array(), $this->initializer7bc76) || 1) && $this->valueHolder95877 = $valueHolder95877;

        return $this->valueHolder95877->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer7bc76 && ($this->initializer7bc76->__invoke($valueHolder95877, $this, 'isOpen', array(), $this->initializer7bc76) || 1) && $this->valueHolder95877 = $valueHolder95877;

        return $this->valueHolder95877->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer7bc76 && ($this->initializer7bc76->__invoke($valueHolder95877, $this, 'getUnitOfWork', array(), $this->initializer7bc76) || 1) && $this->valueHolder95877 = $valueHolder95877;

        return $this->valueHolder95877->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer7bc76 && ($this->initializer7bc76->__invoke($valueHolder95877, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer7bc76) || 1) && $this->valueHolder95877 = $valueHolder95877;

        return $this->valueHolder95877->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer7bc76 && ($this->initializer7bc76->__invoke($valueHolder95877, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer7bc76) || 1) && $this->valueHolder95877 = $valueHolder95877;

        return $this->valueHolder95877->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer7bc76 && ($this->initializer7bc76->__invoke($valueHolder95877, $this, 'getProxyFactory', array(), $this->initializer7bc76) || 1) && $this->valueHolder95877 = $valueHolder95877;

        return $this->valueHolder95877->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer7bc76 && ($this->initializer7bc76->__invoke($valueHolder95877, $this, 'initializeObject', array('obj' => $obj), $this->initializer7bc76) || 1) && $this->valueHolder95877 = $valueHolder95877;

        return $this->valueHolder95877->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer7bc76 && ($this->initializer7bc76->__invoke($valueHolder95877, $this, 'getFilters', array(), $this->initializer7bc76) || 1) && $this->valueHolder95877 = $valueHolder95877;

        return $this->valueHolder95877->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer7bc76 && ($this->initializer7bc76->__invoke($valueHolder95877, $this, 'isFiltersStateClean', array(), $this->initializer7bc76) || 1) && $this->valueHolder95877 = $valueHolder95877;

        return $this->valueHolder95877->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer7bc76 && ($this->initializer7bc76->__invoke($valueHolder95877, $this, 'hasFilters', array(), $this->initializer7bc76) || 1) && $this->valueHolder95877 = $valueHolder95877;

        return $this->valueHolder95877->hasFilters();
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

        $instance->initializer7bc76 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder95877) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder95877 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder95877->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer7bc76 && ($this->initializer7bc76->__invoke($valueHolder95877, $this, '__get', ['name' => $name], $this->initializer7bc76) || 1) && $this->valueHolder95877 = $valueHolder95877;

        if (isset(self::$publicPropertiesc3378[$name])) {
            return $this->valueHolder95877->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder95877;

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

        $targetObject = $this->valueHolder95877;
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
        $this->initializer7bc76 && ($this->initializer7bc76->__invoke($valueHolder95877, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer7bc76) || 1) && $this->valueHolder95877 = $valueHolder95877;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder95877;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder95877;
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
        $this->initializer7bc76 && ($this->initializer7bc76->__invoke($valueHolder95877, $this, '__isset', array('name' => $name), $this->initializer7bc76) || 1) && $this->valueHolder95877 = $valueHolder95877;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder95877;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder95877;
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
        $this->initializer7bc76 && ($this->initializer7bc76->__invoke($valueHolder95877, $this, '__unset', array('name' => $name), $this->initializer7bc76) || 1) && $this->valueHolder95877 = $valueHolder95877;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder95877;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder95877;
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
        $this->initializer7bc76 && ($this->initializer7bc76->__invoke($valueHolder95877, $this, '__clone', array(), $this->initializer7bc76) || 1) && $this->valueHolder95877 = $valueHolder95877;

        $this->valueHolder95877 = clone $this->valueHolder95877;
    }

    public function __sleep()
    {
        $this->initializer7bc76 && ($this->initializer7bc76->__invoke($valueHolder95877, $this, '__sleep', array(), $this->initializer7bc76) || 1) && $this->valueHolder95877 = $valueHolder95877;

        return array('valueHolder95877');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer7bc76 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer7bc76;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer7bc76 && ($this->initializer7bc76->__invoke($valueHolder95877, $this, 'initializeProxy', array(), $this->initializer7bc76) || 1) && $this->valueHolder95877 = $valueHolder95877;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder95877;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder95877;
    }


}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
