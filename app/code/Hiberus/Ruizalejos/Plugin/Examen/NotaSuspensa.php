<?php

namespace Hiberus\Ruizalejos\Plugin\Examen;

use Hiberus\Ruizalejos\Model\Examen;
class NotaSuspensa
{
    /**
     * @var ScopeConfigInterface
     */
    protected ScopeConfigInterface $scopeConfig;
    protected Hiberus\Ruizalejos\Model\Examen $examen;

    /**
     * @param ScopeConfigInterface $scopeConfig
     */
    public function __construct(Examen $examen,ScopeConfigInterface $scopeConfig)
    {
        $this->scopeConfig = $scopeConfig;
        $this->examen=$examen;
    }
    public function afterGetMark(\Hiberus\Ruizalejos\Model\Examen $subject, $result){
        if( $result<5){
            $result=4.9;
        }
        return $result;
    }
}
