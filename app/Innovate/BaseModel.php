<?php
/**
 * Created by Miki Maine Amdu.
 * For : INNOVATE E-COMMERCE
 * User: MIKI$
 * Date: 5/27/2016
 * Time: 2:25 PM
 */

namespace Innovate;


use Spiritix\LadaCache\Database\Model;
use Spiritix\LadaCache\Database\QueryBuilder;

/**
 * Class BaseModel
 * @package Innovate
 */
class BaseModel extends Model{


    /**
     *
     * @return \Illuminate\Database\Query\Builder|QueryBuilder
     */
    protected function newBaseQueryBuilder()
    {
        $conn = $this->getConnection();
        $grammar = $conn->getQueryGrammar();


        if (true) {
           $query = new QueryBuilder(
                $conn,
                $grammar,
                $conn->getPostProcessor(),
                app()->make('lada.handler')
            );
            return $query;
        } else {
            return parent::newBaseQueryBuilder();
        }
    }

}