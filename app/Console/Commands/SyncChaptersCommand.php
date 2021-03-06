<?php

namespace App\Console\Commands;

use Core\Manga\MangaManager;
use Illuminate\Console\Command;

class SyncChaptersCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'sync:chapters {manga_id}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'This command will sync the chapters of a manga';

    /**
     * The drip e-mail service.
     *
     * @var DripEmailer
     */
    protected $drip;

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $this->manager = new MangaManager();

        $manga = $this->manager->findOneBy(['id' => $this->argument('manga_id')]);

        if (!$manga) {
            $this->error(sprintf('No manga found for %s', $this->argument('manga_id')));

            return;
        }

        dispatch((new \App\Jobs\SyncChaptersJob($manga))->onQueue('sync.index'));
    }
}
