<?php

namespace App\Filament\Resources\PostResource\Pages;

use App\Filament\Resources\PostResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditPost extends EditRecord
{
    protected static string $resource = PostResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\ViewAction::make(),
            Actions\DeleteAction::make(),
        ];
    }

    //protected function getFormActions(): array
    //{
    //    return [
    //    ...parent::getFormActions(),
    //    Actions\Action::make('publish')
    //        ->color('success')
    //        ->icon('heroicon-o-arrow-top-right-on-square'),
    //    ];
    //}
}
