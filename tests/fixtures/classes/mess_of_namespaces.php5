<?php

class X {

  /**
   * @param \Root\Foo\Bar $bar
   * @param bool $maybe
   * @return Relative\Baz
   */
  private function mess(\Root\Foo\Bar $bar, $maybe) {
    return new Relative\Baz();
  }

}
