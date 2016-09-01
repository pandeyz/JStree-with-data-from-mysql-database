<?php
    $response = 
    '<ul> <li data-checkstate="undetermined">Parent 1' .
    '    <ul>' .
    '        <li data-checkstate="unchecked">Child 1a' .
    '            <ul>' .
    '                <li data-checkstate="unchecked">Grantchild 1a1</li>' .
    '                <li data-checkstate="unchecked">Grantchild 1a2</li>' .
    '            </ul>' .
    '        </li>' .
    '        <li data-checkstate="undetermined">Child 1b' .
    '            <ul>' .
    '                <li data-checkstate="unchecked">Grantchild 1b1</li>' .
    '                <li data-checkstate="checked">Grantchild 1b2</li>' .
    '            </ul>' .
    '        </li>' .
    '    </ul>' .
    '</li>' .
    '<li data-checkstate="unchecked">Parent 2' .
    '    <ul>' .
    '        <li data-checkstate="unchecked">Child 2a' .
    '            <ul>' .
    '                <li data-checkstate="unchecked">Grantchild 2a1</li>' .
    '                <li data-checkstate="unchecked">Grantchild 2a2</li>' .
    '            </ul>' .
    '        </li>' .
    '        <li data-checkstate="unchecked">Child 1b' .
    '            <ul>' .
    '                <li data-checkstate="unchecked">Grantchild 2b1</li>' .
    '                <li data-checkstate="unchecked">Grantchild 2b2</li>' .
    '            </ul>' .
    '        </li>' .
    '    </ul>' .
    '</li> </ul>';

    echo $response;
?>