<?php

namespace XF\Template\Compiler\Tag;

use XF\Template\Compiler\Syntax\Tag;
use XF\Template\Compiler;

class Copyright extends AbstractTag
{
	public function compile(Tag $tag, Compiler $compiler, array $context, $inlineExpected)
	{
		$tag->assertEmpty();

		return "{$compiler->templaterVariable}->func('copyright')";
	}
}