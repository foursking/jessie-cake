<?php

function throwException($msg, $code=0)
{
	throw new ThinkException($msg, $code, true);
}
