<?php
// if ( !mt_rand( 0, 15 ) ) {
if ( true ) {
	$wgProfiler['class'] = 'Profiler';
} else {
	$wgProfiler['class'] = 'ProfilerStub';
}
