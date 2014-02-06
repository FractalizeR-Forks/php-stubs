<?php

/**
 * An implementation of a Thread should extend this declaration, implementing the run method.
 * When the start method of that object is called, the run method code will be executed in separate Thread.
 *
 * Class Thread
 */
abstract class Thread {
    /**
     * @param int  $size
     * @param bool $preserve
     *
     * @return boolean
     */
    final public function chunk ($size, $preserve) {
    }

    /**
     * Will return the identity of the Thread that created the referenced Thread
     *
     * @return int A numeric identity
     */
    final public function getCreatorId () {
    }

    /**
     * Will return the identity of the currently executing thread
     *
     * @return int A numeric identity
     */
    final public static function getCurrentThreadId () {
    }


    /**
     * Will return the identity of the referenced Thread
     *
     * @return int A numeric identity
     */
    final public function getThreadId () {
    }

    /**
     * Tell if the referenced Thread has been joined by another context
     *
     * @return bool A boolean indication of state
     */
    final public function isJoined () {
    }

    /**
     * Tell if the referenced Thread is executing
     *
     * @return bool  A boolean indication of state  Note: A Thread is considered running while executing the run method
     */
    final public function isRunning () {
    }

    /**
     * Tell if the referenced Thread has been started
     *
     * @return bool A boolean indication of state
     */
    final public function isStarted () {
    }

    /**
     * Tell if the referenced Thread exited, suffered fatal errors, or threw uncaught exceptions during execution
     *
     * @return bool A boolean indication of state
     */
    final public function isTerminated () {
    }

    /**
     * Tell if the referenced Thread is waiting for notification
     *
     * @return bool A boolean indication of state
     */
    final public function isWaiting () {
    }

    /**
     * Causes the calling context to wait for the referenced Thread to finish executing
     *
     * @return bool A boolean indication of success
     */
    final public function join () {
    }

    /**
     * Lock the referenced objects storage for the calling context
     *
     * @return bool A boolean indication of success
     */
    final public function lock () {
    }

    /**
     * Merges data into the current object
     *
     * @param mixed $from      The data to merge
     * @param bool  $overwrite Overwrite existing keys flag, by default true
     *
     * @return bool
     */
    final public function merge ($from, $overwrite = true) {
    }

    /**
     * Send notification to the referenced Thread
     *
     * @return bool A boolean indication of success
     */
    final public function notify () {
    }

    /**
     * Pops an item from the objects properties table
     *
     * @return mixed The last item from the objects properties table
     */
    final public function pop () {
    }

    /**
     * The run method of a Thread is executed in a Thread when a call to Thread::start is made
     *
     * @return void|mixed The methods return value, if used, will be ignored
     */
    abstract public function run ();

    /**
     * Shifts an item from the objects properties table
     *
     * @return mixed The first item from the objects properties table
     */
    final public function shift () {
    }

    /**
     * Will start a new Thread to execute the implemented run method
     *
     * @param int $options An optional mask of inheritance constants, by default PTHREADS_INHERIT_ALL
     *
     * @return bool A boolean indication of success
     */
    final public function start ($options) {
    }

    /**
     * Executes the block while retaining the synchronization lock for the current context.
     *
     * @param callable $block     The block of code to execute
     * @param mixed    $arguments ... Variable length list of arguments to use as function arguments to the block
     *
     * @return mixed  The return value from the block
     */
    final public function synchronized ($block, $arguments = null) {
    }

    /**
     * Unlock the referenced objects storage for the calling context
     *
     * @return bool A boolean indication of success
     */
    final public function unlock () {
    }

    /**
     * Will cause the calling Thread to wait for notification from the referenced Thread
     *
     * @param int $timeout An optional timeout in millionths of a second
     *
     * @return bool A boolean indication of success
     */
    final public function wait ($timeout = 0) {
    }
}

/**
 *
 * Worker Threads have a persistent context, as such should be used over Threads in most cases.
 *
 * Class Worker
 */
abstract class  Worker {

    /**
     * Fetches a chunk of the objects properties table of the given size, optionally preserving keys
     *
     * @param int  $size     The number of items to fetch
     * @param bool $preserve Preserve the keys of members, by default false
     *
     * @return bool
     */
    final public function chunk ($size, $preserve = false) {
    }

    /**
     * Will return the identity of the Thread that created the referenced Thread
     *
     * @return int A numeric identity
     */
    final public function getCreatorId () {
    }

    /**
     * Returns the number of Stackables waiting to be executed by the referenced Worker
     *
     * @return int An integral value
     */
    final public function getStacked () {
    }

    /**
     * Will return the identity of the referenced Worker
     *
     * @return int A numeric identity
     */
    final public function getThreadId () {
    }

    /**
     * Tell if the referenced Worker has been shutdown
     *
     * @return bool A boolean indication of state
     */
    final public function isShutdown () {
    }

    /**
     * Tell if a Worker is executing Stackables
     *
     * @return bool A boolean indication of state
     */
    final public function isWorking () {
    }

    /**
     * Merges data into the current object
     *
     * @param mixed $from      The data to merge
     * @param bool  $overwrite Overwrite existing keys flag, by default true
     *
     * @return bool A boolean indication of success
     */
    final public function merge ($from, $overwrite = true) {
    }

    /**
     * Pops an item from the objects properties table
     *
     * @return mixed The last item from the objects properties table
     */
    final public function pop () {
    }

    /**
     * The run method should prepare the Workers members ( and resources ) - Stackables have access to
     * the Worker and it's methods/members/resources during execution
     *
     * @return mixed The methods return value, if used, will be ignored
     */
    abstract public function run ();

    /**
     * Shifts an item from the objects properties table
     *
     * @return mixed The first item from the objects properties table
     */
    final public function shift () {
    }

    /**
     * Shuts down the Worker after executing all the Stackables previously stacked
     *
     * @return void
     */
    final public function shutdown () {
    }

    /**
     * Appends the referenced Stackable to the stack of the referenced Worker
     *
     * @param Stackable $work An object of type Stackable to be executed by the referenced Worker
     *
     * @return int The new length of the stack
     */
    final public function stack ($work) {
    }

    /**
     * Will start a new Thread, executing Worker::run and then waiting for Stackables
     *
     * @param int $options An optional mask of inheritance constants, by default PTHREADS_INHERIT_ALL
     *
     * @return bool A boolean indication of success
     */
    final public function start ($options) {
    }

    /**
     * Removes the referenced Stackable ( or all Stackables if parameters are void ) from stack of the referenced Worker
     *
     * @param Stackable $work An object of type Stackable
     *
     * @return int The new length of the stack
     *
     */
    final public function unstack ($work) {
    }
}

/**
 * Stackables are tasks that are executed by Worker threads. You can synchronize with, read,
 * and write Stackable objects before, after and during their execution.
 *
 * Class Stackable
 */
abstract class Stackable {

    /**
     * Fetches a chunk of the objects properties table of the given size, optionally preserving keys
     *
     * @param int  $size     The number of items to fetch
     * @param bool $preserve Preserve the keys of members, by default false
     *
     * @return array An array of items from the objects member table
     */
    final public function chunk ($size, $preserve = false) {
    }

    /**
     * A Stackable is running when a Worker Thread is executing it
     *
     * @return bool A boolean indication of state
     */
    final public function isRunning () {
    }

    /**
     * Tell if the referenced Stackable exited, suffered fatal errors, or threw uncaught exceptions during execution
     *
     * @return bool A boolean indication of state
     */
    final public function isTerminated () {
    }

    /**
     * Tell if the referenced Stackable is waiting for notification
     *
     * @return bool A boolean indication of state
     */
    final public function isWaiting () {
    }

    /**
     * Lock the referenced objects storage for the calling context
     *
     * @return bool A boolean indication of success
     */
    final public function lock () {
    }

    /**
     * Merges data into the current object
     *
     * @param mixed $from      The data to merge
     * @param bool  $overwrite Overwrite existing keys flag, by default true
     *
     * @return bool A boolean indication of success
     */
    final public function merge ($from, $overwrite = true) {
    }

    /**
     * Sends notification to a Stackable that is waiting
     *
     * @return bool A boolean indication of state
     */
    final public function notify () {
    }

    /**
     * Pops an item from the objects properties table
     *
     * @return mixed The last item from the objects properties table
     */
    final public function pop () {
    }

    /**
     * The run method of a Stackable is executed by the Worker Thread
     *
     * @return mixed|void The methods return value, if used, will be ignored
     */
    abstract public function run ();

    /**
     * Shifts an item from the objects properties table
     *
     * @return mixed  The first item from the objects properties table
     */
    final public function shift () {
    }

    /**
     * Executes the block while retaining the synchronization lock for the current context.
     *
     * @param callable $block     The block of code to execute
     * @param mixed    $arguments ... Variable length list of arguments to use as function arguments to the block
     *
     * @return mixed The return value from the block
     */
    final public function synchronized ($block, $arguments = null) {
    }

    /**
     * Unlock the referenced objects storage for the calling context
     *
     * @return bool A boolean indication of success
     */
    final public function unlock () {
    }

    /**
     * Waits for notification from the Stackable
     *
     * @param int $timeout An optional timeout in millionths of a second.
     *
     * @return bool A boolean indication of success
     */
    final public function wait ($timeout = 0) {
    }
}