import win32evtlog
from datetime import datetime, timedelta

def get_recent_logins(log_name="Security", days=5):
    # Open the Windows Event Log
    server = None  # None means local machine
    handle = win32evtlog.OpenEventLog(server, log_name)

    # Define the time range
    end_time = datetime.now()
    start_time = end_time - timedelta(days=days)

    # Filter event logs by time and event ID (4624: successful login)
    flags = win32evtlog.EVENTLOG_BACKWARDS_READ | win32evtlog.EVENTLOG_SEQUENTIAL_READ
    events = []
    total_records = win32evtlog.GetNumberOfEventLogRecords(handle)

    while True:
        records = win32evtlog.ReadEventLog(handle, flags, 0)
        if not records:
            break
        for event in records:
            if event.TimeGenerated < start_time:
                break
            if event.EventID == 4624:  # Successful logon event
                user_name = event.StringInserts[5]  # The username is located here
                time_logged_in = event.TimeGenerated  # The time of the login event
                events.append({
                    "user": user_name,
                    "time": time_logged_in
                })

    win32evtlog.CloseEventLog(handle)
    return events

# Get recent logins
recent_logins = get_recent_logins()

# Display only the username and time of login
print("Recent Logins (User and Time):")
for login in recent_logins:
    print(f"User: {login['user']}, Time: {login['time']}")
