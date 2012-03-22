<?php

/**
 * @Entity
 * @Table(name="log",
 *        uniqueConstraints={@UniqueConstraint(name="PRIMARY",columns={"id"})},
 *        indexes={
 *           @Index(name="level_file_line",columns={"level","file","line"}),
 *           @Index(name="host",columns={"host"})
 *        }
 * )
 */
class ApiPublicModelLogLine extends ApiPublicModel {
	/**
	 * @var integer
	 *
	 * @Id
	 * @GeneratedValue
	 * @Column(name="id",type="integer")
	 */
	private $_id;

	/**
	 * @var string
	 *
	 * @Column(name="message",type="text")
	 */
	private $_message;

	/**
	 * @var string
	 *
	 * @Column(name="level",type="text")
	 */
	private $_level;

	/**
	 * @var integer
	 *
	 * @Column(name="timestamp",type="integer")
	 */
	private $_timestamp;

	/**
	 * @var string
	 *
	 * @Column(name="file",type="text")
	 */
	private $_file;

	/**
	 * @var integer
	 *
	 * @Column(name="line",type="integer")
	 */
	private $_line;

	/**
	 * @var string
	 *
	 * @Column(name="host",type="text")
	 */
	private $_host;

	/**
	 * @var array
	 *
	 * @Column(name="context",type="array")
	 */
	private $_context;

	/**
	 * @var array
	 *
	 * @Column(name="stacktrace",type="array")
	 */
	private $_stacktrace;

	/**
	 * Get the id of this log line.
	 *
	 * @return integer
	 */
	public function getId() {
		return $this->_id;
	}

	/**
	 * Get the message.
	 *
	 * @return string
	 */
	public function getMessage() {
		return $this->_message;
	}

	/**
	 * Set the message.
	 *
	 * @param string $message
	 *
	 * @return ApiPublicModelLogLine This.
	 */
	public function setMessage($message) {
		$this->_message = $message;

		return $this;
	}

	/**
	 * Get the error level.
	 *
	 * @return string
	 */
	public function getLevel() {
		return $this->_level;
	}

	/**
	 * Set the error level.
	 *
	 * @param string $level
	 *
	 * @return ApiPublicModelLogLine This.
	 */
	public function setLevel($level) {
		$this->_level = $level;

		return $this;
	}

	/**
	 * Get the timestamp.
	 *
	 * @return integer
	 */
	public function getTimestamp() {
		return $this->_timestamp;
	}

	/**
	 * Set the timestamp.
	 *
	 * @param integer $timestamp
	 *
	 * @return ApiPublicModelLogLine This.
	 */
	public function setTimestamp($timestamp) {
		$this->_timestamp = $timestamp;

		return $this;
	}

	/**
	 * Get the file.
	 *
	 * @return string
	 */
	public function getFile() {
		return $this->_file;
	}

	/**
	 * Set the file.
	 *
	 * @param string $file
	 *
	 * @return ApiPublicModelLogLine This.
	 */
	public function setFile($file) {
		$this->_file = $file;

		return $this;
	}

	/**
	 * Get the line.
	 *
	 * @return integer
	 */
	public function getLine() {
		return $this->_line;
	}

	/**
	 * Set the line.
	 *
	 * @param integer $line
	 *
	 * @return ApiPublicModelLogLine This.
	 */
	public function setLine($line) {
		$this->_line = $line;

		return $this;
	}

	/**
	 * Get the host.
	 *
	 * @return string
	 */
	public function getHost() {
		return $this->_host;
	}

	/**
	 * Set the host.
	 *
	 * @param string $host
	 *
	 * @return ApiPublicModelLogLine This.
	 */
	public function setHost($host) {
		$this->_host = $host;

		return $this;
	}

	/**
	 * Get the context.
	 *
	 * @return array
	 */
	public function getContext() {
		return $this->_context;
	}

	/**
	 * Set the context.
	 *
	 * @param array $context
	 *
	 * @return ApiPublicModelLogLine This.
	 */
	public function setContext(array $context) {
		$this->_context = $context;

		return $this;
	}

	/**
	 * Get the stacktrace.
	 *
	 * @return array
	 */
	public function getStacktrace() {
		return $this->_stacktrace;
	}

	/**
	 * Set the stacktrace.
	 *
	 * @param array $stacktrace
	 *
	 * @return ApiPublicModelLogLine This.
	 */
	public function setStacktrace(array $stacktrace) {
		$this->_stacktrace = $stacktrace;

		return $this;
	}
}