import win32evtlog

def get_errors_from_event_log(log_type="Application", server=None, hours_ago=24):
    handle = win32evtlog.OpenEventLog(server, log_type)
    flags = win32evtlog.EVENTLOG_BACKWARDS_READ | win32evtlog.EVENTLOG_SEQUENTIAL_READ

    errors = []
    while True:
        events = win32evtlog.ReadEventLog(handle, flags, 0)
        if not events:
            break

        for event in events:
            if event.EventType == win32evtlog.EVENTLOG_ERROR_TYPE:
                errors.append(event)

    win32evtlog.CloseEventLog(handle)
    return errors

errors = get_errors_from_event_log()

for error in errors:
    print("Source:", error.SourceName)
    print("Event ID:", error.EventID)
    print("Message:", error.StringInserts)
    print("-" * 20)
