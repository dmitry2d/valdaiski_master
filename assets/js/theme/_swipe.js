$(document).ready (() => {

    document.touchdata = {
        startX: 0,
        endX: 0,
        startY: 0,
        endY: 0
    };
        
    function triggerSwipe() {
        
        let deltaX = document.touchdata.startX - document.touchdata.endX;
        let deltaY = document.touchdata.startY - document.touchdata.endY;

        if (deltaY < 50 && deltaY > -50 && deltaX > 50) $(document).trigger('swipeLeft');
        if (deltaY < 50 && deltaY > -50 && deltaX < -50) $(document).trigger('swipeReft');
    }
    
    document.addEventListener('touchstart', e => {
        document.touchdata.startX = e.changedTouches[0].screenX
        document.touchdata.startY = e.changedTouches[0].screenY
    })
    
    document.addEventListener('touchend', e => {
        document.touchdata.endX = e.changedTouches[0].screenX
        document.touchdata.endY = e.changedTouches[0].screenY
        triggerSwipe();
    })

});