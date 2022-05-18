
@extends('layouts.app')
{{-- // written by: Driane PPerez
  // tested by: Driane Perez
  // debugged by: Driane Perez --}}

@section('content')
<script src="{{ asset('js/daypilot/daypilot-all.min.js') }}"></script>

<div id="wrapper">
    @include('layouts.link')
    <div class="d-flex flex-column" id="content-wrapper">
        <div id="content">
            @include('layouts.nav')
            <div class="main">
                <div id="dp"></div>
                
              </div>
              
              <script>
                const dp = new DayPilot.Calendar("dp", {
                  viewType: "Week",
                  cellHeight: 30,
                  timeRangeSelectedHandling: "Enabled",
                  onTimeRangeSelected: async (args) => {
                    const modal = await DayPilot.Modal.prompt("Create a new Entry:", "");
                    const dp = args.control;
                    dp.clearSelection();
                    if (modal.canceled) { return; }
                    dp.events.add({
                      start: args.start,
                      end: args.end,
                      id: DayPilot.guid(),
                      text: modal.result
                    });
                  },
                  eventDeleteHandling: "Update",
                  onEventDeleted: (args) => {
                    args.control.message("Event deleted: " + args.e.text());
                  },
                  eventMoveHandling: "Update",
                  onEventMoved: (args) => {
                    args.control.message("Event moved: " + args.e.text());
                  },
                  eventResizeHandling: "Update",
                  onEventResized: (args) => {
                    args.control.message("Event resized: " + args.e.text());
                  },
                  eventClickHandling: "Edit",
                  eventEditHandling: "Update",
                  onEventEdited: (args) => {
                    args.control.message("Event edited: " + args.e.text());
                  },
                  eventHoverHandling: "Bubble",
                  bubble: new DayPilot.Bubble({
                    onLoad: (args) => {
                      // if event object doesn't specify "bubbleHtml" property 
                      // this onLoad handler will be called to provide the bubble HTML
                      args.html = "Event details";
                    }
                  }),
                  contextMenu: new DayPilot.Menu({
                    items: [
                      { text: "Delete", onClick: (args) => { const dp = args.source.calendar; dp.events.remove(args.source); } }
                    ]
                  }),
                });
                dp.events.list = [
                  {
                    id: "1",
                    start: DayPilot.Date.today().addHours(10),
                    end: DayPilot.Date.today().addHours(12),
                    text: "Event 1"
                  }
                ];
                dp.init();
              </script>









        </div>
       @include('layouts.fotter')
    </div><a class="border rounded d-inline scroll-to-top" href="#page-top"><i class="fas fa-angle-up"></i></a>
</div>


@endsection