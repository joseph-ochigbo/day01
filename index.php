<?php

$name = isset($_GET['name']) ? trim((string) $_GET['name']) : '';

if ($name === '') {
    echo 'Hello, Guest!';
} else {
    echo 'Hello, ' . htmlspecialchars($name, ENT_QUOTES, 'UTF-8') . '!';
}
