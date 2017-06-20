<?php namespace Miskowskij\Src;

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

class App {

    public function __construct() {

    }

    public function index() {
        return 'welcome to root';
    }

    public function foo() {
        return 'welcome to foo';
    }

    public function bar() {
        return 'welcome to bar';
    }

}
