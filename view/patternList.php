<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>List of patterns</title>
    </head>
    <body>
		<h1>List of patterns</h1>

        <table>  
            <tbody><tr><td>Name</td><td>Description</td><td>Context</td><td>Problems</td><td>Consequences</td><td>Solution</td></tr></tbody>  
            <?php
            foreach ($patterns as $id => $pattern) {
                echo '<tr><td><a href="index.php?pattern=' . $pattern->getId() . '">' . $pattern->getName() . '</a></td><td>' 
            		. $pattern->getDescription() . '</td><td>' 
            		. $pattern->getContext() . '</td><td>' 
            		. $pattern->getProblems() . '</td><td>'
            		. $pattern->getConsequences() . '</td><td>'
                	. $pattern->getSolution() . '</td></tr>';
            }
            ?>  
        </table>  
        
    </body>
</html>