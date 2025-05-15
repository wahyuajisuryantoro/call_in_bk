<?php

namespace App\Filament\Clusters;

use Filament\Clusters\Cluster;

class ManajemenGaleri extends Cluster
{
    protected static ?string $navigationIcon = 'heroicon-o-photo';
    protected static ?string $navigationLabel = 'Manajemen Galeri';
    protected static ?int $navigationSort = 3;
    protected static ?string $clusterBreadcrumb = 'Galeri';
    protected static ?string $navigationGroup = 'Manajemen Galeri';
}



