<?php


namespace RamlServer;


class DefaultProcessorTest extends RamlServerTestCase
{

	public function test_generateClassName()
	{
		$this->assertEquals('TestApi', DefaultProcessor::generateClassName('test-api'));
		$this->assertEquals('TestApi', DefaultProcessor::generateClassName('test_api'));
		$this->assertEquals('Namespace\\TestApi', DefaultProcessor::generateClassName('test-api', 'Namespace'));
	}


	public function test_generateMethodName()
	{
		$this->assertEquals('getSearch', DefaultProcessor::generateMethodName('GET','/search'));
		$this->assertEquals('getUsersSearch', DefaultProcessor::generateMethodName('GET','/users/search'));

	}


}
