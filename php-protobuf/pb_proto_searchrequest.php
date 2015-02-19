<?php
/**
 * Auto generated from searchrequest.proto at 2015-02-19 21:26:54
 */

/**
 * SearchRequest message
 */
class SearchRequest extends \ProtobufMessage
{
    /* Field index constants */
    const QUERY = 1;
    const PAGE_NUMBER = 2;
    const RESULT_PER_PAGE = 3;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::QUERY => array(
            'name' => 'query',
            'required' => true,
            'type' => 7,
        ),
        self::PAGE_NUMBER => array(
            'name' => 'page_number',
            'required' => false,
            'type' => 5,
        ),
        self::RESULT_PER_PAGE => array(
            'name' => 'result_per_page',
            'required' => false,
            'type' => 5,
        ),
    );

    /**
     * Constructs new message container and clears its internal state
     *
     * @return null
     */
    public function __construct()
    {
        $this->reset();
    }

    /**
     * Clears message values and sets default ones
     *
     * @return null
     */
    public function reset()
    {
        $this->values[self::QUERY] = null;
        $this->values[self::PAGE_NUMBER] = null;
        $this->values[self::RESULT_PER_PAGE] = null;
    }

    /**
     * Returns field descriptors
     *
     * @return array
     */
    public function fields()
    {
        return self::$fields;
    }

    /**
     * Sets value of 'query' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setQuery($value)
    {
        return $this->set(self::QUERY, $value);
    }

    /**
     * Returns value of 'query' property
     *
     * @return string
     */
    public function getQuery()
    {
        return $this->get(self::QUERY);
    }

    /**
     * Sets value of 'page_number' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setPageNumber($value)
    {
        return $this->set(self::PAGE_NUMBER, $value);
    }

    /**
     * Returns value of 'page_number' property
     *
     * @return int
     */
    public function getPageNumber()
    {
        return $this->get(self::PAGE_NUMBER);
    }

    /**
     * Sets value of 'result_per_page' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setResultPerPage($value)
    {
        return $this->set(self::RESULT_PER_PAGE, $value);
    }

    /**
     * Returns value of 'result_per_page' property
     *
     * @return int
     */
    public function getResultPerPage()
    {
        return $this->get(self::RESULT_PER_PAGE);
    }
}
