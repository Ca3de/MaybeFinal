protected function schedule(Schedule $schedule)
{
    $schedule->command('sermons:fetch-youtube')->hourly();
}
