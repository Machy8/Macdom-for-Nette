<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Setup
 *
 * @author Machy
 */
namespace Machy8\Macdom;

use Latte\Loaders\FileLoader;
use Machy8\Macdom\Elements\Elements;
use Machy8\Macdom\Macros\Macros;

class Setup extends FileLoader{

	/** @var Elements */
	protected $elements;

	/** @var Macros */
	protected $macros;

	/** @var integer */
	protected $indentMethod;

	/** @var integer */
	protected $spacesCount;

	public function __construct ()
	{
		$this->elements = new Elements;
		$this->macros = new Macros;
	}

	/**
	 * @param integer $count
	 * @return \Machy8\Macdom\Setup
	 */
	public function spacesPerIndent ($count)
	{
		$this->spacesCount = $count;
		return $this;
	}

	/**
	 * @param integer $id
	 * @return \Machy8\Macdom\Setup
	 */
	public function indentMethod ($id)
	{
		$this->indentMethod = $id;
		return $this;
	}

	/**
	 * @param integer $elements
	 * @return \Machy8\Macdom\Setup
	 */
	public function addElements ($elements)
	{
		$this->elements->addElements($elements);
		return $this;
	}
	
	/**
	 * @param array $attributes
	 * @return \Machy8\Macdom\Setup
	 */
	public function addBooleanAttributes ($attributes)
	{
		$this->elements->addBooleanAttributes ($attributes);
		return $this;
	}
	
	/**
	 * @param string $macroId
	 * @param function $function
	 * @return \Machy8\Macdom\Setup
	 */
	public function addMacro ($macroId, $function)
	{
		$this->macros->addCustomMacro($macroId, $function);
		return $this;
	}
}
