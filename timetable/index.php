<?php 
header("Content-Type: text/html; charset=UTF-8");
include_once("../config.php");
?>
<?php getHeader(); ?>
<?php getNav() ?>
	<button onclick="location.href='#511'">511 группа</button>
	<button onclick="location.href='#541'">541 группа</button>
	<div id="timetable" class="box">
        <span class="title_box padding10"><h1>Расписание звонков</h1></span>
                        <table class="timetable_box">
                        <tbody>
                            <tr>
                                <th>С понедельника по пятницу</th>
                                <th></th>
                                <th>В субботу</th>
                            </tr>
                            <tr> <!-- 1 урок -->
                                <td class="padding20">1 урок</td>
                                <td class="padding20">9:00 - 9:45</td>
                                <td class="padding20">1 урок</td>
                                <td class="padding20">9:00 - 9:40</td>
                            </tr>
                            <tr> <!-- 2 урок -->
                                <td class="padding20">2 урок</td>
                                <td class="padding20">9:55 - 10:40</td>
                                
                                <td class="padding20">2 урок</td>
                                <td class="padding20">9:45 - 10:25</td>
                            </tr>
                            <tr> <!-- 3 урок -->
                                <td class="padding20">3 урок</td>
                                <td class="padding20">10:50 - 11:35</td>
                                
                                <td class="padding20">3 урок</td>
                                <td class="padding20">10:40 - 11:20</td>
                            </tr>
                            <tr> <!-- 4 урок -->
                                <td class="padding20">4 урок</td>
                                <td class="padding20">11:45 - 12:30</td>
                                
                                <td class="padding20">4 урок</td>
                                <td class="padding20">11:25 - 12:05</td>
                            </tr>
                            <tr> <!-- Большая перемена -->
                                <td class="padding20">Большая перемена</td>
                                <td class="padding20">12:30 - 13:25</td>
                            </tr>
                            <tr> <!-- 5 урок -->
                                <td class="padding20">5 урок</td>
                                <td class="padding20">13:25 - 14:10</td>
                                
                                <td class="padding20">5 урок</td>
                                <td class="padding20">12:10 - 12:50</td>
                            </tr>
                            <tr> <!-- 6 урок -->
                                <td class="padding20">6 урок</td>
                                <td class="padding20">14:20 - 15:05</td>
                                
                                <td class="padding20">6 урок</td>
                                <td class="padding20">12:55 - 13:35</td>
                            </tr>
                            <tr> <!-- 7 урок -->
                                <td class="padding20">7 урок</td>
                                <td class="padding20">15:10 - 15:55</td>
                                
                                <td class="padding20">7 урок</td>
                                <td class="padding20">13:40 - 14:20</td>
                            </tr>
                        </tbody>
                    </table>
        <span class="title_box padding10" id="511"><h1>Расписание 511 группа</h1></span>
                    <table class="timetable_box">
                        <tr>
                            <th>Пн</th>
                            <th>Вт</th>
                            <th>Ср</th>
                            <th>Чт</th>
                            <th>Пт</th>
                            <th>Сб</th>
                        </tr>
                        <tr> <!-- 1й урок -->
                            <td class="lesson" data-title="Очень длинная подсказка">55</td> <!-- пн -->
                            <td class="lesson" data-title="Информатика">55</td> <!-- вт -->
                            <td class="lesson" data-title="Информатика">55</td> <!-- ср -->
                            <td class="lesson" data-title="Информатика">55</td> <!-- чт -->
                            <td class="lesson" data-title="Информатика">55</td> <!-- пт -->
                            <td class="lesson" data-title="Информатика">55</td> <!-- сб -->
                        </tr>
                        <tr> <!-- 2й урок -->
                            <td class="lesson" data-title="Информатика">55</td> <!-- пн -->
                            <td class="lesson" data-title="Информатика">55</td> <!-- вт -->
                            <td class="lesson" data-title="Информатика">55</td> <!-- ср -->
                            <td class="lesson" data-title="Информатика">55</td> <!-- чт -->
                            <td class="lesson" data-title="Информатика">55</td> <!-- пт -->
                            <td class="lesson" data-title="Информатика">55</td> <!-- сб -->
                        </tr>
                        <tr> <!-- 3й урок -->
                            <td class="lesson" data-title="Информатика">55</td> <!-- пн -->
                            <td class="lesson" data-title="Информатика">55</td> <!-- вт -->
                            <td class="lesson" data-title="Информатика">55</td> <!-- ср -->
                            <td class="lesson" data-title="Информатика">55</td> <!-- чт -->
                            <td class="lesson" data-title="Информатика">55</td> <!-- пт -->
                            <td class="lesson" data-title="Информатика">55</td> <!-- сб -->
                        </tr>
                        <tr> <!-- 4й урок -->
                            <td class="lesson" data-title="Информатика">55</td> <!-- пн -->
                            <td class="lesson" data-title="Информатика">55</td> <!-- вт -->
                            <td class="lesson" data-title="Информатика">55</td> <!-- ср -->
                            <td class="lesson" data-title="Информатика">55</td> <!-- чт -->
                            <td class="lesson" data-title="Информатика">55</td> <!-- пт -->
                            <td class="lesson" data-title="Информатика">55</td> <!-- сб -->
                        </tr>
                        <tr> <!-- 5й урок -->
                            <td class="lesson" data-title="Информатика">55</td> <!-- пн -->
                            <td class="lesson" data-title="Информатика">55</td> <!-- вт -->
                            <td class="lesson" data-title="Информатика">55</td> <!-- ср -->
                            <td class="lesson" data-title="Информатика">55</td> <!-- чт -->
                            <td class="lesson" data-title="Информатика">55</td> <!-- пт -->
                            <td class="lesson" data-title="Информатика">55</td> <!-- сб -->
                        </tr>
                        <tr> <!-- 6й урок -->
                            <td class="lesson" data-title="Инфорка">55</td> <!-- пн -->
                            <td class="lesson" data-title="Информатика">55</td> <!-- вт -->
                            <td class="lesson" data-title="Информатика">55</td> <!-- ср -->
                            <td class="lesson" data-title="Информатика">55</td> <!-- чт -->
                            <td class="lesson" data-title="Информатика">55</td> <!-- пт -->
                            <td class="lesson" data-title="Информатика">55</td> <!-- сб -->
                        </tr>
                    </table>
    </div>
    	<div id="timetable" class="box">
        <span class="title_box padding10"><h1>Расписание 541 группа</h1></span>
                    <table class="timetable_box" id="541">
                        <tr>
                            <th>Пн</th>
                            <th>Вт</th>
                            <th>Ср</th>
                            <th>Чт</th>
                            <th>Пт</th>
                            <th>Сб</th>
                        </tr>
                        <tr> <!-- 1й урок -->
                            <td class="lesson" data-title="Очень длинная подсказка">55</td> <!-- пн -->
                            <td class="lesson" data-title="Информатика">55</td> <!-- вт -->
                            <td class="lesson" data-title="Информатика">55</td> <!-- ср -->
                            <td class="lesson" data-title="Информатика">55</td> <!-- чт -->
                            <td class="lesson" data-title="Информатика">55</td> <!-- пт -->
                            <td class="lesson" data-title="Информатика">55</td> <!-- сб -->
                        </tr>
                        <tr> <!-- 2й урок -->
                            <td class="lesson" data-title="Информатика">55</td> <!-- пн -->
                            <td class="lesson" data-title="Информатика">55</td> <!-- вт -->
                            <td class="lesson" data-title="Информатика">55</td> <!-- ср -->
                            <td class="lesson" data-title="Информатика">55</td> <!-- чт -->
                            <td class="lesson" data-title="Информатика">55</td> <!-- пт -->
                            <td class="lesson" data-title="Информатика">55</td> <!-- сб -->
                        </tr>
                        <tr> <!-- 3й урок -->
                            <td class="lesson" data-title="Информатика">55</td> <!-- пн -->
                            <td class="lesson" data-title="Информатика">55</td> <!-- вт -->
                            <td class="lesson" data-title="Информатика">55</td> <!-- ср -->
                            <td class="lesson" data-title="Информатика">55</td> <!-- чт -->
                            <td class="lesson" data-title="Информатика">55</td> <!-- пт -->
                            <td class="lesson" data-title="Информатика">55</td> <!-- сб -->
                        </tr>
                        <tr> <!-- 4й урок -->
                            <td class="lesson" data-title="Информатика">55</td> <!-- пн -->
                            <td class="lesson" data-title="Информатика">55</td> <!-- вт -->
                            <td class="lesson" data-title="Информатика">55</td> <!-- ср -->
                            <td class="lesson" data-title="Информатика">55</td> <!-- чт -->
                            <td class="lesson" data-title="Информатика">55</td> <!-- пт -->
                            <td class="lesson" data-title="Информатика">55</td> <!-- сб -->
                        </tr>
                        <tr> <!-- 5й урок -->
                            <td class="lesson" data-title="Информатика">55</td> <!-- пн -->
                            <td class="lesson" data-title="Информатика">55</td> <!-- вт -->
                            <td class="lesson" data-title="Информатика">55</td> <!-- ср -->
                            <td class="lesson" data-title="Информатика">55</td> <!-- чт -->
                            <td class="lesson" data-title="Информатика">55</td> <!-- пт -->
                            <td class="lesson" data-title="Информатика">55</td> <!-- сб -->
                        </tr>
                        <tr> <!-- 6й урок -->
                            <td class="lesson" data-title="Инфорка">55</td> <!-- пн -->
                            <td class="lesson" data-title="Информатика">55</td> <!-- вт -->
                            <td class="lesson" data-title="Информатика">55</td> <!-- ср -->
                            <td class="lesson" data-title="Информатика">55</td> <!-- чт -->
                            <td class="lesson" data-title="Информатика">55</td> <!-- пт -->
                            <td class="lesson" data-title="Информатика">55</td> <!-- сб -->
                        </tr>
                    </table>
    </div>
<?php getFooter(); ?>