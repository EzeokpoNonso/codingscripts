def computepay():
    work_hours = float(input('Enter work hours: '))
    rate_per_hour = float(input('Enter rate per hour: '))
    min_work_hours = 40
    gross_pay = work_hours * rate_per_hour
    overtime = work_hours - min_work_hours
    overtime_rate = rate_per_hour * 1.5
    bonus_pay = overtime * overtime_rate

    if work_hours > 40:
        gross_pay = (work_hours - overtime) * rate_per_hour
        return (bonus_pay + gross_pay)
    elif work_hours == 40:
        return gross_pay
    return 'Please complete work hours'


print(computepay())

#---------------------------------------------------------------------------

def computepay(hours,rate):
  print ("In compute pay hours=", hours, " rate=", rate)
  pay = rate * hours
  if hours > 40:
      pay = rate * (40) + rate * 1.5 * (h - 40)
  return(pay)

hrs = input("Enter Hours:")
rate=input("Enter Rate:")
h = float(hrs)
r = float(rate)
p=computepay(h,r)
print('Pay: ', p)