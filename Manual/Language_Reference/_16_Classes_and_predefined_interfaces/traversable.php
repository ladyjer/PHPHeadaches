<?php
/**
 * Created by IntelliJ IDEA.
 * User: ladyj
 * Date: 10/26/14
 * Time: 5:10 PM
 *
 * Interface to detect if a class is traversable using foreach.
 * Abstract base interface that cannot be implemented alone.
 * Instead it must be implemented by either IteratorAggregate or Iterator.
 * This is an internal engine interface which cannot be implemented in PHP scripts.
 * Either IteratorAggregate or Iterator must be used instead. When implementing an
 * interface which extends Traversable, make sure to list IteratorAggregate
 * or Iterator before its name in the implements clause.
 */ 