<?php namespace Miskowskij\Test;
/**
 * Copyright 2016 Mathias Åkerberg
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *     http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 *
 *
 * @author    Mathias Åkerberg <zegoffinator@gmail.com>
 * @license   http://www.apache.org/licenses/LICENSE-2.0 Apache license v2.0
 */

use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

use Miskowskij\Src\App as App;

class AppTest extends \PHPUnit_Framework_TestCase {

    private $app;

    public function setUp()
    {
        parent::setUp();

        $this->app = new App;
    }

    public function testIndex()
    {
        $this->assertEquals($this->app->index(), 'welcome to root');
    }

    public function testFoo()
    {
        $this->assertEquals($this->app->foo(), 'welcome to foo');
    }

    public function testBar()
    {
        $this->assertEquals($this->app->bar(), 'welcome to bar');
    }

}
