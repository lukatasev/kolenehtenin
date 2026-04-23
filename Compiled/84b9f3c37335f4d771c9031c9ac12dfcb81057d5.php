<?php defined("INDLUCE_CHECK") || die("404"); ?><?php echo $this->runChild('partials.header'); ?>

<main class="w-full flex-grow">
 <section class="border-b border-surfaceContainer bg-surfaceContainer/30">
 <div class="max-w-5xl mx-auto px-6 py-14">
 <h1 class="text-3xl font-semibold text-onSurface"><?php echo \htmlentities(tr('timetables.title'), ENT_QUOTES, 'UTF-8', false); ?></h1>
 <p class="text-base text-onSurface/60 mt-2"><?php echo \htmlentities(tr('timetables.subtitle'), ENT_QUOTES, 'UTF-8', false); ?></p>
 </div>
 </section>

 <section class="py-16 px-6 max-w-5xl mx-auto space-y-10">
 <div class="space-y-4">
 <h2 class="text-xl font-semibold text-onSurface border-b border-surfaceContainer pb-3"><?php echo \htmlentities(tr('programs.electro.title'), ENT_QUOTES, 'UTF-8', false); ?></h2>
 <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
 <div class="border border-surfaceContainer p-4">
 <h3 class="text-sm font-semibold text-onSurface mb-3"><?php echo \htmlentities(tr('timetables.morning'), ENT_QUOTES, 'UTF-8', false); ?></h3>
 <div class="overflow-x-auto">
 <table class="w-full text-sm">
 <thead>
 <tr class="border-b border-surfaceContainer">
 <th class="text-left py-2 px-2 font-medium text-onSurface/70">Време</th>
 <th class="text-left py-2 px-2 font-medium text-onSurface/70">Понеделник</th>
 <th class="text-left py-2 px-2 font-medium text-onSurface/70">Вторник</th>
 <th class="text-left py-2 px-2 font-medium text-onSurface/70">Среда</th>
 <th class="text-left py-2 px-2 font-medium text-onSurface/70">Четврток</th>
 <th class="text-left py-2 px-2 font-medium text-onSurface/70">Петок</th>
 </tr>
 </thead>
 <tbody class="text-onSurface/70">
 <tr class="border-b border-surfaceContainer/50">
 <td class="py-2 px-2">07:30 - 08:10</td>
 <td class="py-2 px-2">Математика</td>
 <td class="py-2 px-2">Физика</td>
 <td class="py-2 px-2">Македонски</td>
 <td class="py-2 px-2">Англиски</td>
 <td class="py-2 px-2">Историја</td>
 </tr>
 <tr class="border-b border-surfaceContainer/50">
 <td class="py-2 px-2">08:15 - 08:55</td>
 <td class="py-2 px-2">Англиски</td>
 <td class="py-2 px-2">Математика</td>
 <td class="py-2 px-2">Физика</td>
 <td class="py-2 px-2">Македонски</td>
 <td class="py-2 px-2">ГИО</td>
 </tr>
 <tr class="border-b border-surfaceContainer/50">
 <td class="py-2 px-2">09:00 - 09:40</td>
 <td class="py-2 px-2">ГИО</td>
 <td class="py-2 px-2">Историја</td>
 <td class="py-2 px-2">Англиски</td>
 <td class="py-2 px-2">Математика</td>
 <td class="py-2 px-2">Физика</td>
 </tr>
 <tr class="border-b border-surfaceContainer/50">
 <td class="py-2 px-2">09:45 - 10:25</td>
 <td class="py-2 px-2">Физика</td>
 <td class="py-2 px-2">ГИО</td>
 <td class="py-2 px-2">Математика</td>
 <td class="py-2 px-2">Историја</td>
 <td class="py-2 px-2">Македонски</td>
 </tr>
 <tr class="border-b border-surfaceContainer/50">
 <td class="py-2 px-2">10:30 - 11:10</td>
 <td class="py-2 px-2">Историја</td>
 <td class="py-2 px-2">Македонски</td>
 <td class="py-2 px-2">ГИО</td>
 <td class="py-2 px-2">Физика</td>
 <td class="py-2 px-2">Англиски</td>
 </tr>
 <tr>
 <td class="py-2 px-2">11:15 - 11:55</td>
 <td class="py-2 px-2">Македонски</td>
 <td class="py-2 px-2">Англиски</td>
 <td class="py-2 px-2">Историја</td>
 <td class="py-2 px-2">ГИО</td>
 <td class="py-2 px-2">Математика</td>
 </tr>
 </tbody>
 </table>
 </div>
 </div>
 <div class="border border-surfaceContainer p-4">
 <h3 class="text-sm font-semibold text-onSurface mb-3"><?php echo \htmlentities(tr('timetables.afternoon'), ENT_QUOTES, 'UTF-8', false); ?></h3>
 <div class="overflow-x-auto">
 <table class="w-full text-sm">
 <thead>
 <tr class="border-b border-surfaceContainer">
 <th class="text-left py-2 px-2 font-medium text-onSurface/70">Време</th>
 <th class="text-left py-2 px-2 font-medium text-onSurface/70">Понеделник</th>
 <th class="text-left py-2 px-2 font-medium text-onSurface/70">Вторник</th>
 <th class="text-left py-2 px-2 font-medium text-onSurface/70">Среда</th>
 <th class="text-left py-2 px-2 font-medium text-onSurface/70">Четврток</th>
 <th class="text-left py-2 px-2 font-medium text-onSurface/70">Петок</th>
 </tr>
 </thead>
 <tbody class="text-onSurface/70">
 <tr class="border-b border-surfaceContainer/50">
 <td class="py-2 px-2">13:00 - 13:40</td>
 <td class="py-2 px-2">Македонски</td>
 <td class="py-2 px-2">ГИО</td>
 <td class="py-2 px-2">Англиски</td>
 <td class="py-2 px-2">Математика</td>
 <td class="py-2 px-2">Историја</td>
 </tr>
 <tr class="border-b border-surfaceContainer/50">
 <td class="py-2 px-2">13:45 - 14:25</td>
 <td class="py-2 px-2">Физика</td>
 <td class="py-2 px-2">Македонски</td>
 <td class="py-2 px-2">Математика</td>
 <td class="py-2 px-2">ГИО</td>
 <td class="py-2 px-2">Физика</td>
 </tr>
 <tr class="border-b border-surfaceContainer/50">
 <td class="py-2 px-2">14:30 - 15:10</td>
 <td class="py-2 px-2">Математика</td>
 <td class="py-2 px-2">Физика</td>
 <td class="py-2 px-2">ГИО</td>
 <td class="py-2 px-2">Историја</td>
 <td class="py-2 px-2">Македонски</td>
 </tr>
 <tr class="border-b border-surfaceContainer/50">
 <td class="py-2 px-2">15:15 - 15:55</td>
 <td class="py-2 px-2">Англиски</td>
 <td class="py-2 px-2">Математика</td>
 <td class="py-2 px-2">Физика</td>
 <td class="py-2 px-2">Македонски</td>
 <td class="py-2 px-2">ГИО</td>
 </tr>
 <tr class="border-b border-surfaceContainer/50">
 <td class="py-2 px-2">16:00 - 16:40</td>
 <td class="py-2 px-2">ГИО</td>
 <td class="py-2 px-2">Англиски</td>
 <td class="py-2 px-2">Математика</td>
 <td class="py-2 px-2">Физика</td>
 <td class="py-2 px-2">Англиски</td>
 </tr>
 <tr>
 <td class="py-2 px-2">16:45 - 17:25</td>
 <td class="py-2 px-2">Историја</td>
 <td class="py-2 px-2">ГИО</td>
 <td class="py-2 px-2">Историја</td>
 <td class="py-2 px-2">Англиски</td>
 <td class="py-2 px-2">Математика</td>
 </tr>
 </tbody>
 </table>
 </div>
 </div>
 </div>
 </div>

 <div class="space-y-4">
 <h2 class="text-xl font-semibold text-onSurface border-b border-surfaceContainer pb-3"><?php echo \htmlentities(tr('programs.machine.title'), ENT_QUOTES, 'UTF-8', false); ?></h2>
 <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
 <div class="border border-surfaceContainer p-4">
 <h3 class="text-sm font-semibold text-onSurface mb-3"><?php echo \htmlentities(tr('timetables.morning'), ENT_QUOTES, 'UTF-8', false); ?></h3>
 <div class="overflow-x-auto">
 <table class="w-full text-sm">
 <thead>
 <tr class="border-b border-surfaceContainer">
 <th class="text-left py-2 px-2 font-medium text-onSurface/70">Време</th>
 <th class="text-left py-2 px-2 font-medium text-onSurface/70">Понеделник</th>
 <th class="text-left py-2 px-2 font-medium text-onSurface/70">Вторник</th>
 <th class="text-left py-2 px-2 font-medium text-onSurface/70">Среда</th>
 <th class="text-left py-2 px-2 font-medium text-onSurface/70">Четврток</th>
 <th class="text-left py-2 px-2 font-medium text-onSurface/70">Петок</th>
 </tr>
 </thead>
 <tbody class="text-onSurface/70">
 <tr class="border-b border-surfaceContainer/50">
 <td class="py-2 px-2">07:30 - 08:10</td>
 <td class="py-2 px-2">Математика</td>
 <td class="py-2 px-2">Физика</td>
 <td class="py-2 px-2">Македонски</td>
 <td class="py-2 px-2">Англиски</td>
 <td class="py-2 px-2">Историја</td>
 </tr>
 <tr class="border-b border-surfaceContainer/50">
 <td class="py-2 px-2">08:15 - 08:55</td>
 <td class="py-2 px-2">Англиски</td>
 <td class="py-2 px-2">Математика</td>
 <td class="py-2 px-2">Физика</td>
 <td class="py-2 px-2">Македонски</td>
 <td class="py-2 px-2">ГИО</td>
 </tr>
 <tr class="border-b border-surfaceContainer/50">
 <td class="py-2 px-2">09:00 - 09:40</td>
 <td class="py-2 px-2">ГИО</td>
 <td class="py-2 px-2">Историја</td>
 <td class="py-2 px-2">Англиски</td>
 <td class="py-2 px-2">Математика</td>
 <td class="py-2 px-2">Физика</td>
 </tr>
 <tr class="border-b border-surfaceContainer/50">
 <td class="py-2 px-2">09:45 - 10:25</td>
 <td class="py-2 px-2">Физика</td>
 <td class="py-2 px-2">ГИО</td>
 <td class="py-2 px-2">Математика</td>
 <td class="py-2 px-2">Историја</td>
 <td class="py-2 px-2">Македонски</td>
 </tr>
 <tr class="border-b border-surfaceContainer/50">
 <td class="py-2 px-2">10:30 - 11:10</td>
 <td class="py-2 px-2">Историја</td>
 <td class="py-2 px-2">Македонски</td>
 <td class="py-2 px-2">ГИО</td>
 <td class="py-2 px-2">Физика</td>
 <td class="py-2 px-2">Англиски</td>
 </tr>
 <tr>
 <td class="py-2 px-2">11:15 - 11:55</td>
 <td class="py-2 px-2">Македонски</td>
 <td class="py-2 px-2">Англиски</td>
 <td class="py-2 px-2">Историја</td>
 <td class="py-2 px-2">ГИО</td>
 <td class="py-2 px-2">Математика</td>
 </tr>
 </tbody>
 </table>
 </div>
 </div>
 <div class="border border-surfaceContainer p-4">
 <h3 class="text-sm font-semibold text-onSurface mb-3"><?php echo \htmlentities(tr('timetables.afternoon'), ENT_QUOTES, 'UTF-8', false); ?></h3>
 <div class="overflow-x-auto">
 <table class="w-full text-sm">
 <thead>
 <tr class="border-b border-surfaceContainer">
 <th class="text-left py-2 px-2 font-medium text-onSurface/70">Време</th>
 <th class="text-left py-2 px-2 font-medium text-onSurface/70">Понеделник</th>
 <th class="text-left py-2 px-2 font-medium text-onSurface/70">Вторник</th>
 <th class="text-left py-2 px-2 font-medium text-onSurface/70">Среда</th>
 <th class="text-left py-2 px-2 font-medium text-onSurface/70">Четврток</th>
 <th class="text-left py-2 px-2 font-medium text-onSurface/70">Петок</th>
 </tr>
 </thead>
 <tbody class="text-onSurface/70">
 <tr class="border-b border-surfaceContainer/50">
 <td class="py-2 px-2">13:00 - 13:40</td>
 <td class="py-2 px-2">Македонски</td>
 <td class="py-2 px-2">ГИО</td>
 <td class="py-2 px-2">Англиски</td>
 <td class="py-2 px-2">Математика</td>
 <td class="py-2 px-2">Историја</td>
 </tr>
 <tr class="border-b border-surfaceContainer/50">
 <td class="py-2 px-2">13:45 - 14:25</td>
 <td class="py-2 px-2">Физика</td>
 <td class="py-2 px-2">Македонски</td>
 <td class="py-2 px-2">Математика</td>
 <td class="py-2 px-2">ГИО</td>
 <td class="py-2 px-2">Физика</td>
 </tr>
 <tr class="border-b border-surfaceContainer/50">
 <td class="py-2 px-2">14:30 - 15:10</td>
 <td class="py-2 px-2">Математика</td>
 <td class="py-2 px-2">Физика</td>
 <td class="py-2 px-2">ГИО</td>
 <td class="py-2 px-2">Историја</td>
 <td class="py-2 px-2">Македонски</td>
 </tr>
 <tr class="border-b border-surfaceContainer/50">
 <td class="py-2 px-2">15:15 - 15:55</td>
 <td class="py-2 px-2">Англиски</td>
 <td class="py-2 px-2">Математика</td>
 <td class="py-2 px-2">Физика</td>
 <td class="py-2 px-2">Македонски</td>
 <td class="py-2 px-2">ГИО</td>
 </tr>
 <tr class="border-b border-surfaceContainer/50">
 <td class="py-2 px-2">16:00 - 16:40</td>
 <td class="py-2 px-2">ГИО</td>
 <td class="py-2 px-2">Англиски</td>
 <td class="py-2 px-2">Математика</td>
 <td class="py-2 px-2">Физика</td>
 <td class="py-2 px-2">Англиски</td>
 </tr>
 <tr>
 <td class="py-2 px-2">16:45 - 17:25</td>
 <td class="py-2 px-2">Историја</td>
 <td class="py-2 px-2">ГИО</td>
 <td class="py-2 px-2">Историја</td>
 <td class="py-2 px-2">Англиски</td>
 <td class="py-2 px-2">Математика</td>
 </tr>
 </tbody>
 </table>
 </div>
 </div>
 </div>
 </div>

 <div class="space-y-4">
 <h2 class="text-xl font-semibold text-onSurface border-b border-surfaceContainer pb-3"><?php echo \htmlentities(tr('programs.hospitality.title'), ENT_QUOTES, 'UTF-8', false); ?></h2>
 <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
 <div class="border border-surfaceContainer p-4">
 <h3 class="text-sm font-semibold text-onSurface mb-3"><?php echo \htmlentities(tr('timetables.morning'), ENT_QUOTES, 'UTF-8', false); ?></h3>
 <div class="overflow-x-auto">
 <table class="w-full text-sm">
 <thead>
 <tr class="border-b border-surfaceContainer">
 <th class="text-left py-2 px-2 font-medium text-onSurface/70">Време</th>
 <th class="text-left py-2 px-2 font-medium text-onSurface/70">Понеделник</th>
 <th class="text-left py-2 px-2 font-medium text-onSurface/70">Вторник</th>
 <th class="text-left py-2 px-2 font-medium text-onSurface/70">Среда</th>
 <th class="text-left py-2 px-2 font-medium text-onSurface/70">Четврток</th>
 <th class="text-left py-2 px-2 font-medium text-onSurface/70">Петок</th>
 </tr>
 </thead>
 <tbody class="text-onSurface/70">
 <tr class="border-b border-surfaceContainer/50">
 <td class="py-2 px-2">07:30 - 08:10</td>
 <td class="py-2 px-2">Математика</td>
 <td class="py-2 px-2">Физика</td>
 <td class="py-2 px-2">Македонски</td>
 <td class="py-2 px-2">Англиски</td>
 <td class="py-2 px-2">Историја</td>
 </tr>
 <tr class="border-b border-surfaceContainer/50">
 <td class="py-2 px-2">08:15 - 08:55</td>
 <td class="py-2 px-2">Англиски</td>
 <td class="py-2 px-2">Математика</td>
 <td class="py-2 px-2">Физика</td>
 <td class="py-2 px-2">Македонски</td>
 <td class="py-2 px-2">ГИО</td>
 </tr>
 <tr class="border-b border-surfaceContainer/50">
 <td class="py-2 px-2">09:00 - 09:40</td>
 <td class="py-2 px-2">ГИО</td>
 <td class="py-2 px-2">Историја</td>
 <td class="py-2 px-2">Англиски</td>
 <td class="py-2 px-2">Математика</td>
 <td class="py-2 px-2">Физика</td>
 </tr>
 <tr class="border-b border-surfaceContainer/50">
 <td class="py-2 px-2">09:45 - 10:25</td>
 <td class="py-2 px-2">Физика</td>
 <td class="py-2 px-2">ГИО</td>
 <td class="py-2 px-2">Математика</td>
 <td class="py-2 px-2">Историја</td>
 <td class="py-2 px-2">Македонски</td>
 </tr>
 <tr class="border-b border-surfaceContainer/50">
 <td class="py-2 px-2">10:30 - 11:10</td>
 <td class="py-2 px-2">Историја</td>
 <td class="py-2 px-2">Македонски</td>
 <td class="py-2 px-2">ГИО</td>
 <td class="py-2 px-2">Физика</td>
 <td class="py-2 px-2">Англиски</td>
 </tr>
 <tr>
 <td class="py-2 px-2">11:15 - 11:55</td>
 <td class="py-2 px-2">Македонски</td>
 <td class="py-2 px-2">Англиски</td>
 <td class="py-2 px-2">Историја</td>
 <td class="py-2 px-2">ГИО</td>
 <td class="py-2 px-2">Математика</td>
 </tr>
 </tbody>
 </table>
 </div>
 </div>
 <div class="border border-surfaceContainer p-4">
 <h3 class="text-sm font-semibold text-onSurface mb-3"><?php echo \htmlentities(tr('timetables.afternoon'), ENT_QUOTES, 'UTF-8', false); ?></h3>
 <div class="overflow-x-auto">
 <table class="w-full text-sm">
 <thead>
 <tr class="border-b border-surfaceContainer">
 <th class="text-left py-2 px-2 font-medium text-onSurface/70">Време</th>
 <th class="text-left py-2 px-2 font-medium text-onSurface/70">Понеделник</th>
 <th class="text-left py-2 px-2 font-medium text-onSurface/70">Вторник</th>
 <th class="text-left py-2 px-2 font-medium text-onSurface/70">Среда</th>
 <th class="text-left py-2 px-2 font-medium text-onSurface/70">Четврток</th>
 <th class="text-left py-2 px-2 font-medium text-onSurface/70">Петок</th>
 </tr>
 </thead>
 <tbody class="text-onSurface/70">
 <tr class="border-b border-surfaceContainer/50">
 <td class="py-2 px-2">13:00 - 13:40</td>
 <td class="py-2 px-2">Македонски</td>
 <td class="py-2 px-2">ГИО</td>
 <td class="py-2 px-2">Англиски</td>
 <td class="py-2 px-2">Математика</td>
 <td class="py-2 px-2">Историја</td>
 </tr>
 <tr class="border-b border-surfaceContainer/50">
 <td class="py-2 px-2">13:45 - 14:25</td>
 <td class="py-2 px-2">Физика</td>
 <td class="py-2 px-2">Македонски</td>
 <td class="py-2 px-2">Математика</td>
 <td class="py-2 px-2">ГИО</td>
 <td class="py-2 px-2">Физика</td>
 </tr>
 <tr class="border-b border-surfaceContainer/50">
 <td class="py-2 px-2">14:30 - 15:10</td>
 <td class="py-2 px-2">Математика</td>
 <td class="py-2 px-2">Физика</td>
 <td class="py-2 px-2">ГИО</td>
 <td class="py-2 px-2">Историја</td>
 <td class="py-2 px-2">Македонски</td>
 </tr>
 <tr class="border-b border-surfaceContainer/50">
 <td class="py-2 px-2">15:15 - 15:55</td>
 <td class="py-2 px-2">Англиски</td>
 <td class="py-2 px-2">Математика</td>
 <td class="py-2 px-2">Физика</td>
 <td class="py-2 px-2">Македонски</td>
 <td class="py-2 px-2">ГИО</td>
 </tr>
 <tr class="border-b border-surfaceContainer/50">
 <td class="py-2 px-2">16:00 - 16:40</td>
 <td class="py-2 px-2">ГИО</td>
 <td class="py-2 px-2">Англиски</td>
 <td class="py-2 px-2">Математика</td>
 <td class="py-2 px-2">Физика</td>
 <td class="py-2 px-2">Англиски</td>
 </tr>
 <tr>
 <td class="py-2 px-2">16:45 - 17:25</td>
 <td class="py-2 px-2">Историја</td>
 <td class="py-2 px-2">ГИО</td>
 <td class="py-2 px-2">Историја</td>
 <td class="py-2 px-2">Англиски</td>
 <td class="py-2 px-2">Математика</td>
 </tr>
 </tbody>
 </table>
 </div>
 </div>
 </div>
 </div>
 </section>
</main>

<?php echo $this->runChild('partials.footer'); ?>