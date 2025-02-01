# PHP Array Key Type Bug
This repository demonstrates a subtle bug in PHP related to how it handles array keys when using mixed integer and string keys.  The issue stems from PHP's loose typing system, which can lead to unexpected behavior if not handled carefully.

The `bug.php` file contains the buggy code.  The `bugSolution.php` file shows how to solve the issue by ensuring consistent key types.