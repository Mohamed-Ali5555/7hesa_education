<?php

use Spatie\LaravelSettings\Migrations\SettingsMigration;

return new class extends SettingsMigration {
    public function up(): void
    {
        // --------------------------------------------------------------------------- \\
        $this->migrator->add('general.name', 'Mora Soft International Schools');
        // --------------------------------------------------------------------------- \\
        $this->migrator->add('general.phone', '0123456789');
        $this->migrator->add('general.address', 'القاهرة');
        // --------------------------------------------------------------------------- \\
        $this->migrator->add('general.email', 'info@masteremail.com');
        $this->migrator->add('general.logo', '1.jpg');
        $this->migrator->add('general.timezone', 'UTC');
        // --------------------------------------------------------------------------- \\
    }
};
