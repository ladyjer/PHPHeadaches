<?php
/**
 * Created by IntelliJ IDEA.
 * User: ColomboM
 * Date: 17/09/15
 * Time: 16:21
 */
try {
    $c = 10 / 0;
} catch (DivisionByZeroError $e) {
    echo "Ciaoooo";
}