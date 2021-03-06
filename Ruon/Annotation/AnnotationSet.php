<?php

namespace Ruon\Annotation;

/**
 * Набор аннотаций класса (в том числе аннотаций методов и полей)
 *
 * @author morph, goorus
 */
class AnnotationSet
{
	/**
	 * Набор аннотаций класса
	 *
	 * @var \Ruon\Annotation\AnnotationRow
	 */
	protected $classAnnotation;

	/**
	 * Полученные аннотации методов
	 *
	 * @var array
	 */
	protected $methodAnnotations;

	/**
	 * Полученные аннотации полей
	 *
	 * @var array
	 */
	protected $propertyAnnotations;

	/**
	 * Конструктор
	 *
	 * @param \Ruon\Annotation\AnnotationRow Аннотация класса
	 * @param array $methods Аннотации методов
	 * @param array $properties Аннотации полей
	 */
	public function __construct($class, $methods, $properties)
	{
		$this->classAnnotation = $class;
		$this->methodAnnotations = $methods;
		$this->propertyAnnotations = $properties;
	}

	/**
	 * Получить аннотацию класса
	 *
	 * @return \Roun\Annotation\AnnotationRow
	 */
	public function get($name)
	{
		return $this->classAnnotation->get($name);
	}

	/**
	 * Изменить аннотацию класса
	 *
	 * @param \Ruon\Annotation\AnnotationRow $annotation
	 */
	public function set($name, $value)
	{
		$this->classAnnotation->set($name, $value);
	}

	/**
	 * Получить аннотацию метода
	 *
	 * @param string $methodName
	 * @return \Ruon\Annotation\AnnotationRow
	 */
	public function getMethod($methodName)
	{
		return isset($this->methodAnnotations[$methodName])
			? $this->methodAnnotations[$methodName] : null;
	}

	/**
	 * Получить аннотацию поля
	 *
	 * @param string $propertyName
	 * @return \Ruon\Annotation\AnnotationRow
	 */
	public function getProperty($propertyName)
	{
		return isset($this->propertyAnnotations[$propertyName])
			? $this->propertyAnnotations[$propertyName] : null;
	}

	/**
	 * Изменить аннотацию метода
	 *
	 * @param string $methodName
	 * @param \Ruon\Annotation\AnnotationRow $annotationRow
	 */
	public function setMethod($methodName, $annotationRow)
	{
		$this->methodAnnotations[$methodName] = $annotationRow;
	}

	/**
	 * Изменить аннотацию поля
	 *
	 * @param string $propertyName
	 * @param \Ruon\Annotation\AnnotationRow $annotationRow
	 */
	public function setProperty($propertyName, $annotationRow)
	{
		$this->propertyAnnotations[$propertyName] = $annotationRow;
	}
}