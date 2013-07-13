<?php
if ( !mt_rand( 0, 20 ) ) {
        $wgProfiler['class'] = 'Profiler';
} else {
        $wgProfiler['class'] = 'ProfilerStub';
}
?>