<?php

namespace App\Filament\Clusters;

use Filament\Clusters\Cluster;

class ManajemenKontenBeranda extends Cluster
{
    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';
    
    protected static ?string $navigationLabel = 'Manajemen Konten Beranda';
    
    protected static ?int $navigationSort = 1;
    
    protected static ?string $clusterBreadcrumb = 'Konten Beranda';
    protected static ?string $navigationGroup = 'Manajemen Kontent';
}
