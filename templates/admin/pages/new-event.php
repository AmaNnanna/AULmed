<div class="modal fade" id="addOrderModalside" id="addOrderModalside1">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Add Event</h5>
                <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="/new_event" method="POST">
                    <div class="form-group">
                        <label class="text-black font-w500">Event Title</label>
                        <input type="text" class="form-control" name="title" required />
                    </div>
                    <div class="form-group">
                        <label class="text-black font-w500">Event Start Date</label>
                        <input type="text" class="form-control" id="min-date-start-event" name="startDate">
                    </div>
                    <div class="form-group">
                        <label class="text-black font-w500">Event End Date</label>
                        <input type="text" class="form-control" id="min-date-end-event" name="endDate">
                    </div>
                    <div class="form-group">
                        <label class="text-black font-w500">Event Venue</label>
                        <input type="text" class="form-control" name="venue">
                    </div>
                    <div class="form-group">
                        <label class="text-black font-w500">Event Organizer</label>
                        <input type="text" class="form-control" name="organizer">
                    </div>
                    <div class="form-group">
                        <label class="text-black font-w500">Organizer's Email</label>
                        <input type="email" class="form-control" name="email">
                    </div>
                    <div class="form-group">
                        <button type="button" class="btn btn-primary">Create</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>