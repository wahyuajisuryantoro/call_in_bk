<?php

namespace App\Filament\Clusters;

use Filament\Clusters\Cluster;

class ManajemenKontenTentang extends Cluster
{
    protected static ?string $navigationIcon = 'heroicon-o-information-circle';
    protected static ?string $navigationLabel = 'Manajemen Konten Tentang';
    protected static ?int $navigationSort = 2;
    protected static ?string $clusterBreadcrumb = 'Konten Tentang';
    protected static ?string $navigationGroup = 'Manajemen Kontent';
}
