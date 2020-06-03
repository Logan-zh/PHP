<?php
    $cal = new Calendar;
    echo $cal->render();
    class Calendar{
        function __construct(){

        }
        function render(){
            $html = '
            <table><tr>
            <td>一</td>
            <td>二</td>
            <td>三</td>
            <td>四</td>
            <td>五</td>
            <td>六</td>
            <td>日</td></tr>
            ';
            for($i=0;$i<5;$i++){
                $html .= '<tr>';
                for($j=0;$j<7;$j++){
                    $html .= '<td>';
                    $html .= ($i*7+$j);
                    $html .= '</td>';
                }
                $html .= '</tr>';
            }
            $html .= '</table>';
            return $html;
        }
    }
?>