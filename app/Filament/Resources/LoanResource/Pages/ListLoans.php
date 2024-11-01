<?php

namespace App\Filament\Resources\LoanResource\Pages;

use App\Filament\Resources\LoanResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;
use App\Models\Loan;

class ListLoans extends ListRecords
{
    protected static string $resource = LoanResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
            Actions\Action::make('cetak_laporan')
                ->label('Cetak Laporan')
                ->icon('heroicon-o-printer')
                ->action(fn() => static::cetakLaporan())
                ->requiresConfirmation()
                ->modalHeading('Laporan Peminjaman')
                ->modalSubheading('Apakah Anda ingin mencetak laporan peminjaman?'),
        ];
    }

    public static function cetakLaporan()
    {
        $data = \App\Models\Loan::all();
        $pdf = \PDF::loadView('Laporan.cetak', ['data' => $data]);
        return response()->streamDownload(fn() => print($pdf->output()), 'laporan-pinjam.pdf');
    }
}
