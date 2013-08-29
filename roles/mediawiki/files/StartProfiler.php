<?php
if ( !mt_rand( 0, 15 ) ) {
	$wgProfiler['class'] = 'Profiler';
} else {
	$wgProfiler['class'] = 'ProfilerStub';
}
