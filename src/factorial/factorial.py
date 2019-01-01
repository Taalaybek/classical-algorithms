def factorial(number):
    """
    In mathematics, the factorial of a non-negative integer n,
    denoted by n!, is the product of all positive integers less than or equal to n.
    For example 5! = 5 * 4 * 3 * 2 * 1 = 120
    Implemented the algorithm on Python
    :param number:
    :return: int
    """
    if type(number) != int:
        return False
    elif number < 1:
        return None

    if number == 1:
        return 1
    return number * factorial(number - 1)
