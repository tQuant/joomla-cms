<?php
/**
 * @package     Joomla.UnitTest
 *
 * @copyright   Copyright (C) 2005 - 2012 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE
 */

/**
 * Test class for JSessionStorageEaccelerator.
 * Generated by PHPUnit on 2011-10-26 at 19:36:05.
 */
class JSessionStorageEacceleratorTest extends PHPUnit_Framework_TestCase
{
	/**
     * @var JSessionStorageEaccelerator
     */
	protected $object;

	/**
     * Sets up the fixture, for example, opens a network connection.
     * This method is called before a test is executed.
     */
	protected function setUp()
	{
		// Skip these tests if Eaccelerator isn't available.
		if (!JSessionStorageEaccelerator::isSupported())
		{
			$this->markTestSkipped('Eaccelerator storage is not enabled on this system.');
		}

		$this->object = JSessionStorage::getInstance('Eaccelerator');
	}

	/**
     * Tears down the fixture, for example, closes a network connection.
     * This method is called after a test is executed.
     */
	protected function tearDown()
	{

	}

	/**
     * @todo Implement testOpen().
     */
	public function testOpen()
	{
		// Remove the following lines when you implement this test.
		$this->markTestIncomplete('This test has not been implemented yet.');
	}

	/**
     * @todo Implement testClose().
     */
	public function testClose()
	{
		// Remove the following lines when you implement this test.
		$this->markTestIncomplete('This test has not been implemented yet.');
	}

	/**
     * @todo Implement testRead().
     */
	public function testRead()
	{
		// Remove the following lines when you implement this test.
		$this->markTestIncomplete('This test has not been implemented yet.');
	}

	/**
     * @todo Implement testWrite().
     */
	public function testWrite()
	{
		// Remove the following lines when you implement this test.
		$this->markTestIncomplete('This test has not been implemented yet.');
	}

	/**
     * @todo Implement testDestroy().
     */
	public function testDestroy()
	{
		// Remove the following lines when you implement this test.
		$this->markTestIncomplete('This test has not been implemented yet.');
	}

	/**
     * @todo Implement testGc().
     */
	public function testGc()
	{
		// Remove the following lines when you implement this test.
		$this->markTestIncomplete('This test has not been implemented yet.');
	}

	/**
     * @todo Implement testIsSupported().
     */
	public function testIsSupported()
	{
		// Remove the following lines when you implement this test.
		$this->markTestIncomplete('This test has not been implemented yet.');
	}

}