<div>
    <script charset="utf-8" src="http://widgets.twimg.com/j/2/widget.js"></script>
    <script>
        new TWTR.Widget({
            version:2,
            type:'profile',
            rpp:4,
            interval:30000,
            width:'auto',
            height:300,
            theme:{
                shell:{
                    background:'#ddd',
                    color:'#000'
                },
                tweets:{
                    background:'#f9f9f9',
                    color:'#000',
                    links:'#005580'
                }
            },
            features:{
                scrollbar:false,
                loop:false,
                live:false,
                behavior:'all'
            }
        }).render().setUser('netmag').start();
    </script>
</div>