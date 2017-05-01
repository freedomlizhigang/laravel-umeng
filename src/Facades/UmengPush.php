<?php
namespace LiZG\UmengPush\Facades;

class UmengPush extends \Illuminate\Support\Facades\Facade
{
    /**
     * {@inheritDoc}
     */
    protected static function getFacadeAccessor()
    {
        return 'umengpush';
    }
}
